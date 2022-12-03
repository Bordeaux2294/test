window.addEventListener("load", function(){
    
    let all_btn = document.querySelector(".all");
    let sl_btn = document.querySelector(".sl");
    let sup_btn = document.querySelector(".s");
    let result = document.querySelector(".result");

    all_btn.addEventListener("click", function(event){
        event.preventDefault();

        let url = `dashboard.php?filter=All`;
        console.log(url);

        fetch(url)
        .then(function (response) {
            if (response.ok) {
            return response.text();
            } else {
            throw new Error(response.statusText);
            }
        })
        .then(function (data) {
            result.innerHTML = data;
        });
    })

    sl_btn.addEventListener("click", function(event){
        event.preventDefault();

        let url = `dashboard.php?filter=SalesLead`;
        console.log(url);

        fetch(url)
        .then(function (response) {
            if (response.ok) {
            return response.text();
            } else {
            throw new Error(response.statusText);
            }
        })
        .then(function (data) {
            result.innerHTML = data;
        });
    })

    sup_btn.addEventListener("click", function(event){
        event.preventDefault();

        let url = `dashboard.php?filter=Support`;
        console.log(url);

        fetch(url)
        .then(function (response) {
            if (response.ok) {
            return response.text();
            } else {
            throw new Error(response.statusText);
            }
        })
        .then(function (data) {
            result.innerHTML = data;
        });
    })
})