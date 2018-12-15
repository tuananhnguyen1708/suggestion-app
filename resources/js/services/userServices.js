import {processSuccessRequest,processErrorRequest} from '../helper/requestHelper';

export var deleteUserService = function (UserData, successCallback, errorCallback) {
    axios.post('/delete',UserData)
        .then(function (response) {
            console.log('then:',response);
            processSuccessRequest(response,successCallback,errorCallback);
        })
        .catch(function (error) {
            console.log('catch:',error);
            processErrorRequest(error,errorCallback);
        });
}