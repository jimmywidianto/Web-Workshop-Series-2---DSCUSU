    <footer>
        <div class="container">
            
            <p>Copyright by Airu Store</p>
        </div>
    </footer>

    <script>
        const toggle = document.querySelector(".toggle");
        const menu = document.querySelectorAll(".menu");

        /* Toggle mobile menu */
        function toggleMenu() {
            if (menu[0].classList.contains("active")) {
                menu[0].classList.remove("active");
                menu[1].classList.remove("active");
            } else {
                menu[0].classList.add("active");
                menu[1].classList.add("active");
                document.getElementById("line").remove();
            }
        }

        /* Event Listeners */
        toggle.addEventListener("click", toggleMenu, false);
        

    </script>

</body>
</html>