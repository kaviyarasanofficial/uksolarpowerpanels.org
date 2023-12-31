! function($) {
    "use strict";
    var ErapressAdmin = {
        init: function() {
            $(document).ready(ErapressAdmin.ready), $(window).on("load", ErapressAdmin.load), ErapressAdmin.bindUIActions(), $(document).trigger("erapressReady")
        },
        ready: function() {},
        load: function() {
            window.dispatchEvent(new Event("resize"))
        },
        resize: function() {},
        bindUIActions: function() {
            var $this, $wrap = $("#wpwrap");
            $("body");
            $wrap.on("click", ".plugins .erapress-btn:not(.active)", (function(e) {
                e.preventDefault(), $wrap.find(".plugins .erapress-btn.in-progress").length || ($this = $(this), ErapressAdmin.pluginAction($this))
            })), $(document).on("wp-plugin-install-success", ErapressAdmin.pluginInstallSuccess), $(document).on("wp-plugin-install-error", ErapressAdmin.pluginInstallError)
        },
        pluginAction: function($button) {
            if ($button.addClass("in-progress").attr("disabled", "disabled").html(erapress_strings.texts[$button.data("action") + "-inprogress"]), "install" === $button.data("action")) wp.updates.shouldRequestFilesystemCredentials && !wp.updates.ajaxLocked && (wp.updates.requestFilesystemCredentials(event), $(document).on("credential-modal-cancel", (function() {
                $button.removeAttr("disabled").removeClass("in-progress").html(erapress_strings.texts.install), wp.a11y.speak(wp.updates.l10n.updateCancel, "polite")
            }))), wp.updates.installPlugin({
                slug: $button.data("plugin")
            });
            else {
                var data = {
                    _ajax_nonce: erapress_strings.wpnonce,
                    plugin: $button.data("plugin"),
                    action: "erapress-plugin-" + $button.data("action")
                };
                $.post(erapress_strings.ajaxurl, data, (function(response) {
                    response.success ? $button.data("redirect") ? window.location.href = $button.data("redirect") : location.reload() : $(".plugins .erapress-btn.in-progress").removeAttr("disabled").removeClass("in-progress primary").addClass("secondary").html(erapress_strings.texts.retry)
                }))
            }
        },
        pluginInstallSuccess: function(event, response) {
            event.preventDefault();
            var activatedSlug, $init = jQuery(event.target).data("init");
            activatedSlug = void 0 === $init ? response.slug : $init;
            var $button = $('.plugins a[data-plugin="' + activatedSlug + '"]');
            $button.data("action", "activate"), ErapressAdmin.pluginAction($button)
        },
        pluginInstallError: function(event, response) {
            event.preventDefault();
            var activatedSlug, $init = jQuery(event.target).data("init");
            activatedSlug = void 0 === $init ? response.slug : $init, $('.plugins a[data-plugin="' + activatedSlug + '"]').attr("disabled", "disabled").removeClass("in-progress primary").addClass("secondary").html(wp.updates.l10n.installFailedShort)
        }
    };
    ErapressAdmin.init(), window.erapressadmin = ErapressAdmin
}(jQuery);