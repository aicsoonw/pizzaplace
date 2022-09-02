// function AJAXRequestXXX(){
//     function ajax(url) {
//         return new Promise(function(resolve, reject) {
//             var xhr = new XMLHttpRequest();
//             xhr.onload = function() {
//                 resolve(this.responseText);
//             };
//             xhr.onerror = reject;
//             xhr.open('GET', url);
//             xhr.send();
//         });
//     }
//
//     return ajax("/getItemsFromDB")
//         .then(function(result) {
//             return result; // Code depending on result
//         })
//         .catch(function() {
//             // An error occurred
//         });
// }

function AJAXRequestOnLoad(){

    const xhr = new XMLHttpRequest();

    xhr.onload = function () {
        loadInitCartToLS(this.responseText);
    }

    xhr.open('GET', '/getItemsFromDB');
    xhr.send();
}
