<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Infinite Scroll | Lazy Load</title>
    <style>
        html {
            font-size: 20px;
            line-height: 1.6;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
        }

        body {
            /* padding-bottom: 200px; */
        }

        header {
            margin: 1rem 3rem 3rem 3rem;
        }

        header h1 {
            font-size: 3rem;
            line-height: 1.2;
            font-weight: 300;
            color: #999;
        }

        header h2 {
            font-size: 1.5rem;
            line-height: 1.2;
            font-weight: 300;
            color: cornflowerblue;
        }

        main {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 1rem;
            width: 80vw;
            margin: 3rem 3rem;
            grid-template-rows: auto;
        }

        main figure {}

        main figcaption {
            font-size: 1rem;
            font-family: inherit;
        }

        main img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        footer {
            background-color: #aaa;
            color: #333;
            font-size: 1rem;
            font-weight: 300;
            padding: 1rem 3rem 3rem 3rem;
            margin-top: 0;
        }
    </style>
</head>

<body>
    <header>
        <h1>Infinite Scroll | Lazy Load</h1>
        <h2>Loading images gradually as needed</h2>
    </header>
    <main>
        <!-- images will be loaded here with figure and figcaption -->
    </main>
    <footer>
        <p>The Footer. &copy; 2019 Turkey Stuff Inc.</p>
    </footer>



    <script>
        const URL =
            "https://gist.githubusercontent.com/prof3ssorSt3v3/1944e7ba7ffb62fe771c51764f7977a4/raw/c58a342ab149fbbb9bb19c94e278d64702833270/infinite.json";
        document.addEventListener("DOMContentLoaded", () => {
            //set up the IntersectionObserver to load more images if the footer is visible.
            //URL - https://gist.githubusercontent.com/prof3ssorSt3v3/1944e7ba7ffb62fe771c51764f7977a4/raw/c58a342ab149fbbb9bb19c94e278d64702833270/infinite.json
            let options = {
                root: null,
                rootMargins: "0px",
                threshold: 0.5,
            };
            const observer = new IntersectionObserver(handleIntersect, options);
            observer.observe(document.querySelector("footer"));
            //an initial load of some data
            getData();
        });

        function handleIntersect(entries) {
            if (entries[0].isIntersecting) {
                console.warn("something is intersecting with the viewport");
                getData();
            }
        }

        function getData() {
            let main = document.querySelector("main");
            console.log("fetch some JSON data");
            fetch(URL)
                .then((response) => response.json())
                .then((data) => {
                    // data.items[].img, data.items[].name
                    data.items.forEach((item) => {
                        let fig = document.createElement("figure");
                        let fc = document.createElement("figcaption");
                        let img = document.createElement("img");
                        img.src = item.img;
                        img.alt = item.name;
                        fc.textContent = item.name;
                        fig.appendChild(img);
                        fig.appendChild(fc);
                        main.appendChild(fig);
                    });
                });
        }
    </script>
</body>

</html>