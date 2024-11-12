function validateForm() {
    const no_hp = document.getElementById("no_hp").ariaValueMax;

    if (!/^[0-9]+$/.test(no_hp)) {
        alert("Nomor HP harus berupa angka. ");
        return false;
    }
    return true;
}