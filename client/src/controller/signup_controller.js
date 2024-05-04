console.log("Hello World")
document.querySelector("#submit").addEventListener("click", async function(e){
    // e.preventDefault();
    error = document.querySelectorAll(".error");
    if (error.length >0){
        error.forEach(element => {
            element.remove();
        });
    }
    const name = document.getElementsByName("name")[0].value;
    const email = document.getElementsByName("email_sign_up")[0].value;
    const phone_number = document.getElementsByName("phone")[0].value;
    const password = document.getElementsByName("password_sign_up")[0].value;
    const re_password = document.getElementsByName("re-password")[0].value;
    const regex  = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    let tmp = "";
    success = true;
    if(name.length>50)
    {
        tmp = `<p class="text-red-600 error">Tên phải dưới 50 kí tự</p>`;
        document.querySelector('#name').insertAdjacentHTML("afterend", tmp);
        success = false;
    }
    else if(name === "" || !name){
        tmp = `<p class="text-red-600 error">Bạn chưa nhập tên</p>`;
        document.querySelector('#name').insertAdjacentHTML("afterend", tmp);
        success = false;
    }
    if(email==="" || !email)
    {
        tmp = `<p class="text-red-600 error">Bạn chưa nhập email</p>`;
        document.querySelector('#email_sign_up').insertAdjacentHTML("afterend", tmp);
        success = false;
    }
    else if (email.length > 50)
    {
        success = false;
        tmp = `<p class="text-red-600 error">Email phải từ 0 đến 50 kí tự</p>`;
        document.querySelector('#email_sign_up').insertAdjacentHTML("afterend", tmp);
    }
    else if (!regex.test(email))
    {
        tmp = `<p class="text-red-600 error">Email không đúng định dạng</p>`;
        document.querySelector('#email_sign_up').insertAdjacentHTML("afterend", tmp);
        success = false;
    }
    if (phone_number.length > 20)
    {
        success = false;
        tmp = `<p class="text-red-600 error">Số điện thoại phải dưới 20 kí tự</p>`;
        document.querySelector('#phone').insertAdjacentHTML("afterend", tmp);
    }
    else if(phone_number==="" || !phone_number){
        tmp = `<p class="text-red-600 error">Bạn chưa nhập số điện thoại</p>`;
        document.querySelector('#phone').insertAdjacentHTML("afterend", tmp);
        success = false;
    }

    if(password === "" || !password){ 
        tmp = `<p class="text-red-600 error">Bạn chưa nhập mật khẩu</p>`;
        document.querySelector('#password_sign_up').insertAdjacentHTML("afterend", tmp);
        success = false;
    }
    // else if(!(password.match(/[a-z]+/) && password.match(/[A-Z]+/) && password.match(/[0-9]+/) && password.match(/[`!@#$%^&*()_+-]/) && password.length<8)){
    //     tmp = `<p class="text-red-600 error">Mật khẩu phải hơn 8 kí tự, trong đó có ít nhất 1 chữ cái thường (a đến z), 1 chữ cái in hoa (A đến Z), 1 chữ số (0 đến 9) và 1 kí tự đặc biệt</p>`;
    //     document.querySelector('#password_sign_up').insertAdjacentHTML("afterend", tmp);
    //     success = false;
    // }

    if(re_password=== "" || !re_password){
        tmp = `<p class="text-red-600 error">Bạn chưa nhập lại mật khẩu</p>`;
        document.querySelector('#re-password').insertAdjacentHTML("afterend", tmp);
        success = false;
    }
    else if(password != re_password){
        tmp = `<p class="text-red-600 error">Mật khẩu không khớp</p>`;
        document.querySelector('#re-password').insertAdjacentHTML("afterend", tmp);
        success = false;
    }
    
    // const checkUser = async function(){
    //     const rawData = await fetch("./../../server/query_user_data.php");
    //     console.log("Hello Hello");
    //     console.log(rawData);
    //     const data = await rawData.json();
        

    //     data.forEach(user => {
    //         if(JSON.parse(user).useremail == email){
    //             tmp = `<p class="text-red-600 error"> Email bạn nhập bị trùng </p>`;
    //             document.querySelector('#email_sign_up').insertAdjacentHTML("afterend", tmp);
    //             success = false;
    //         }
    //     });
    //     return success;
    // };
    // success = await checkUser();
    
    if (!success) {
        e.preventDefault();
    }
});