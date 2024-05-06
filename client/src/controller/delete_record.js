const alert = document.querySelectorAll(".alert");
    if (alert.length > 0){
        alert.forEach(element => {
            element.remove();
        });
    };