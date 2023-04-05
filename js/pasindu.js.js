function checkpassword() {
    const password = document.getElementById('New_password').value;
    const cpassword = document.getElementById('Conf_password').value;

    if (password !== cpassword) {
        alert('passwords do not match');
    }else{
        alert('password changed successfully');
    }

}