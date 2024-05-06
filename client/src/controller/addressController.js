const addressList = document.querySelectorAll('.addressDelete');
addressList.forEach(addressDel=>{
    addressDel.addEventListener('click',function(){
        const popUpDelete = document.querySelector('.linkAddress');
        popUpDelete.href =  './../../server/delete_address.php?id=Address_' + addressDel.closest('.addressContainer').dataset.addressnumber;
        console.log(popUpDelete);
    })
})

const addressAddList = document.querySelectorAll('.addressAdd');
addressAddList.forEach(addressAdd=>{
    addressAdd.addEventListener('click',function(){
        const popUpDelete = document.querySelector('.linkAddAddress');
        popUpDelete.action =  './../../server/add_address.php?id=Address_' + addressAdd.closest('.addressContainer').dataset.addressnumber;
        console.log(popUpDelete);
    })
})

