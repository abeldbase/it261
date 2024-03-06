<footer>
    <ul>
        <li>&copy; <?php echo date("Y"); ?> by Abel Mengstu, All Rights Reserved ~</li>
        <li><a id="html-checker" href="#" target="_blank">Check HTML</a> ~ <a id="css-checker" href="#" target="_blank">Check CSS</a></li>
    </ul>
    <script>
        document.getElementById("html-checker").setAttribute("href", "https://validator.w3.org/nu/?doc=" + location.href);
        document.getElementById("css-checker").setAttribute("href", "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
    </script>
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.querySelector(".myTopnav");

    if (x.className === "myTopnav") {
        x.className += " responsive";
    } else {
        x.className = "myTopnav";
    }
}
</script>

</footer>

</body>
</html>