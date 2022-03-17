
    function paginator(section){
        var pagination = document.getElementsByClassName('paginator');
        for(var i = 0; i < pagination.length; i++) {
            pagination[i].onclick = function(event){
                event.preventDefault();
                ajax({
                    type: 'GET',
                    url: this.href,
                    success: function(response) {
                        document.getElementById(section).innerHTML = response;
                        paginator(section);
                    }
                });
            };
        }
    }
