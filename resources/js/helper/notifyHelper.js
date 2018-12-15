
/**
 *
 * @param message
 * @param type include type: success, danger, info, warning
 * @param title
 * @param icon
 * @param url
 * @param target
 */
export var appNotify = function (message = '', type = 'success', title = null, icon = '', url = '', target = '_blank') {
    jQuery.notify({
            message: message,
            icon: icon != '' ? icon : '',
            title: title,
            url: url,
            target: target
        },
        {
            type: type,
            timer: 2000,
            mouse_over: 'pause',
            template: '<div data-notify="container" class="alert alert-{0} m-alert nc-notify-container" role="alert">' +
                '<button type="button" aria-hidden="true" class="close" data-notify="dismiss"></button>' +
                // '<span data-notify="icon" class="icon"></span> ' +
                '<span data-notify="title">{1}</span> ' +
                '<span class="message" data-notify="message">{2}</span>' +
                '<div class="progress" data-notify="progressbar">' +
                '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                '</div>' +
                '<a href="{3}" target="{4}" data-notify="url"></a>' +
                '</div>'
        });
}