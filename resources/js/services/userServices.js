import {processSuccessRequest,processErrorRequest} from '../helper/requestHelper';

export var deleteUserService = function (UserData, successCallback, errorCallback) {
    axios.post('/delete',UserData)
        .then(function (response) {
            processSuccessRequest(response,successCallback,errorCallback);
        })
        .catch(function (error) {
            processErrorRequest(error,errorCallback);
        });
}

export var addUserService = function (userData, successCallback, errorCallback) {
    axios.post('/store',userData)
        .then(function (response) {
            processSuccessRequest(response,successCallback,errorCallback);
        })
        .catch(function (error) {
            processErrorRequest(error,errorCallback);
        })
}

export var updateUserService = function (userData,successCallback,errorCallback) {
    axios.post('/update',userData)
        .then(function (response) {
            processSuccessRequest(response,successCallback,errorCallback);
        })
        .catch(function (error) {
            processErrorRequest(error,errorCallback);
        })
}