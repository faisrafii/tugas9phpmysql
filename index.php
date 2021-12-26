<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | ITS Coding</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://img.icons8.com/office/16/000000/school.png"/>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Roboto:wght@400;700;900&display=swap");
        html,
        body {
            height: 100%;
        }
        section {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            min-height: min(80vh, 600px);
            background-color: #312e81;
            margin: 2rem 0 2rem;
            padding: 1rem;
            border-radius: 20px;
            text-align: center;
            overflow: hidden;
            font-family: "Roboto", sans-serif;
        }
        section:before {
            position: absolute;
            mix-blend-mode: overlay;
            filter: brightness(70%);
            content: "";
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("https://images.unsplash.com/photo-1582005450386-52b25f82d9bb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2940&q=80");
            background-size: cover;
            background-position: center;
        }
        h1, h2 {
            margin-top: 2rem;
            color: white;
        }
        h1 {
            position: relative;
            font-weight: 900;
            font-size: clamp(2.5rem, 5vw, 4rem);
        }
        h1 div {
            color: #ddd6fe;
        }
        h2 {
            font-size: clamp(1.3rem, 2vw, 3rem);
        }
        p {
            margin-top: 1rem;
            font-size: clamp(1.3rem, 3vw, 4rem);
            color: white;
        }
        .cta {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-top: 3rem;
            gap: 1.5rem;
        }
        .cta button {
            border: none;
            padding: 1rem 3rem;
            font-size: clamp(1.1rem, 1.3vw, 3rem);
            border-radius: 8px;
            cursor: pointer;
        }
        .cta button:first-of-type {
            background-color: white;
            color: #4c1d95;
            transition: all 300ms ease-in;
        }
        .cta button:first-of-type:hover {
            background-color: #4c1d95;
            color: white;
        }
        .cta button:nth-of-type(2) {
            background-color: #2563eb;
            color: white;
        }
        .cta button:nth-of-type(2):hover {
            background-color: white;
            color: #2563eb;
        }
        @media (min-width: 600px) {
            .cta {
                flex-direction: row;
            }
        }
    </style>
</head>

<body>
    <!-- <header>
        <h1>Pendaftaran Siswa Baru</h1>
        <h2>ITS Coding</h2>
    </header> -->

    <!-- <p>Menu</p>
    <nav class="cta">
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav> -->

    <section>
    <h1>Pendaftaran
        <div>Siswa Baru</div>
    </h1>
    <p>ITS Coding</p>
    <div class="cta">
        <a href="form-daftar.php"><button>Daftar Baru</button></a>
        <a href="list-siswa.php"><button>Pendaftar</button></a>
    </div>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>
    </section>

</body>
</html>