window.onload = start;

function start() {
    const pw = document.querySelector("#pw");
    const pwa = document.querySelector("#pwa");

    /* Så fort användaren skriver något i rutorna så.. */
    pw.addEventListener("change", valideraPw);
    pwa.addEventListener("keyup", valideraPw);

    /* Om rutornas innehåll inte är lika. visa en varning */
    function valideraPw() {
        if (pw.value != pwa.value) {
            pwa.setCustomValidity("Lösenordet stämmer inte!");
        } else {
            pwa.setCustomValidity(' ');
        }
    }
}