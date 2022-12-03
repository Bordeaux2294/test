window.onload = function(){

    function filterType(type){
        return fetch(`http://localhost/info2180-project2/d1ashboard.php?query=${type}`)
            .then((response) => {
                if (response.ok) {
                    return response.text()
                }
                else{
                    throw new Error(`Error! status: ${response.status}`)
                }
            })
            .then((data) => data)
            .catch((err) => err);
    }


    document.getElementById("all").onclick = e => {
        e.preventDefault();
        filterType("").then(
            (data) => (document.getElementById("Contacts").innerHTML = data)
          );
        };

    document.getElementById("sl").onclick = e => {
        e.preventDefault();
        filterType("Sales Lead").then(
            (data) => (document.getElementById("Contacts").innerHTML = data)
          );
        };

    document.getElementById("s").onclick = e => {
        e.preventDefault();
        filterType("Support").then(
            (data) => (document.getElementById("Contacts").innerHTML = data)
          );
        };

    document.getElementById("atm").onclick = e => {
        e.preventDefault("");
        filterType().then(
            (data) => (document.getElementById("Contacts").innerHTML = data)
          );
        };
}