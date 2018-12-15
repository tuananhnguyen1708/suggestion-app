export var processSuccessRequest = function (response, successCallback, errorCallback) {
    if (response.data != null && response.data.code == ReponseCode.SUCCESS) {
        successCallback(response.data);
    } else {
        errorCallback();
    }
}

export var processErrorRequest = function (error, errorCallback) {
    if (error.response && error.response.status == 422) {
        var errs = [];

        _.each(error.response.data.errors, function (itemGroup, key) {
            _.each(itemGroup, function (item) {
                errs.push(item);
            })
        });
        if (errs.length > 0) {
            errorCallback(errs[0]);
        } else {
            errorCallback();
        }

    } else {
        errorCallback();
    }
}