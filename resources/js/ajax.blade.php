
    function ajax(request){
        xhr = new XMLHttpRequest();
        xhr.onload = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                if(typeof request.success === "function") {
                    request.success(xhr.responseText);
                }
            }
        };
        typeof request.url === "undefined" ? request.url = location.href : request.url;
        xhr.open(request.type, request.url, true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        typeof request.data === "undefined" ? xhr.send() : xhr.send(request.data);
    }
