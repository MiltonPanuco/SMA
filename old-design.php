<style>
    .diocesis-container {
        width: 90%;
        margin: 0 auto;
    }

    .diocesis-image-container,
    .diocesis-image-container2 {
        display: flex;
        padding: 10px;
        justify-content: space-between;
        overflow: hidden;
    }

    .diocesis-image-wrapper {
        margin: 0 10px;
        position: relative;
        text-align: center;
        color: white;
    }

    .diocesis-image-title {
        position: absolute;
        bottom: 10px;
        left: 0;
        right: 0;
        font-size: 1.5em;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        margin: 0;
        padding: 0;
        z-index: 2;
        transition: bottom 0.5s ease-in-out, transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
        text-align: center;
    }

    .diocesis-image-description {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 10px;
        font-size: 1em;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        margin: 0;
        transform: translateY(100%);
        transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
        box-sizing: border-box;
        z-index: 1;
        text-align: center;
        opacity: 0;
    }

    .diocesis-image-wrapper a {
        display: block;
        text-decoration: none;
        color: inherit;
    }

    .diocesis-image-wrapper:hover .diocesis-image-description {
        transform: translateY(0);
        opacity: 1;
    }

    .diocesis-image-wrapper:hover .diocesis-image-title {
        bottom: 50px;
        transform: translateY(-10px);
        opacity: 1;
    }

    .diocesis-bw-image {
        filter: grayscale(100%);
        transition: filter 0.5s, transform 0.5s;
        width: 100%;
        height: auto;
        transform-origin: center center;
        border-radius: 10px;
    }

    .diocesis-image-wrapper:hover .diocesis-bw-image {
        filter: grayscale(0%);
        transform: scale(1.01) rotate(0.5deg);
    }

    .diocesis-little {
        display: none;
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .diocesis-big {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    @media (max-width: 768px) {
        .diocesis-big {
            display: none;
        }

        .diocesis-little {
            display: block;
        }

        .diocesis-image-container {
            display: block;
        }

        .diocesis-image-wrapper {
            margin: 15px 0;
            display: block;
        }

        .diocesis-image-wrapper.hidden {
            display: block;
        }
    }
</style>

<div class="diocesis-big">
    <div class="diocesis-container" style="margin-top: 20px;">
        <div class="diocesis-image-container hidden">
            <div class="diocesis-image-wrapper">
                <a href="diocesis.php">
                    <img src="imagen/index/Bdiocesis.jpg" alt="Imagen Diócesis" class="diocesis-bw-image">
                    <div class="diocesis-image-title">Diócesis</div>
                    <div class="diocesis-image-description">Conoce más sobre nosotros</div>
                </a>
            </div>
            <div class="diocesis-image-wrapper">
                <a href="templo.php">
                    <img src="imagen/index/Btemplo.jpg" alt="Imagen Templos" class="diocesis-bw-image">
                    <div class="diocesis-image-title">Templos</div>
                    <div class="diocesis-image-description">Visítanos en nuestros templos y acercate a Dios</div>
                </a>
            </div>
        </div>
        <div class="diocesis-image-container2 hidden">
            <div class="diocesis-image-wrapper">
                <a href="sacramentos.php">
                    <img src="imagen/index/Bsacramentos.jpg" alt="Imagen Sacramentos" class="diocesis-bw-image">
                    <div class="diocesis-image-title">Sacramentos</div>
                    <div class="diocesis-image-description">Descubre la gran misericordia del Padre</div>
                </a>
            </div>
        </div>
        <div class="diocesis-image-container hidden">
            <div class="diocesis-image-wrapper">
                <a href="informes.php">
                    <img src="imagen/index/Bcatequesis.jpg" alt="Imagen Catequesis" class="diocesis-bw-image">
                    <div class="diocesis-image-title">Catequesis</div>
                    <div class="diocesis-image-description">Nútrete de la Palabra de Dios</div>
                </a>
            </div>
            <div class="diocesis-image-wrapper">
                <a href="contactos.php">
                    <img src="imagen/index/Bcontacto.jpg" alt="Imagen Contactanos" class="diocesis-bw-image">
                    <div class="diocesis-image-title">Contáctanos</div>
                    <div class="diocesis-image-description">Nos complace atenderte</div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="diocesis-little">
    <div class="diocesis-container" style="margin-top: 20px;">
        <div class="diocesis-image-container">
            <div class="diocesis-image-wrapper">
                <a href="diocesis.php">
                    <img src="imagen/index/Ldiocesis.jpg" alt="Imagen Diócesis" class="diocesis-bw-image">
                    <div class="diocesis-image-title">Diócesis</div>
                    <div class="diocesis-image-description">Conoce sobre nosotros</div>
                </a>
            </div>
            <div class="diocesis-image-wrapper">
                <a href="templo.php">
                    <img src="imagen/index/Ltemplo.jpg" alt="Imagen Templos" class="diocesis-bw-image">
                    <div class="diocesis-image-title">Templos</div>
                    <div class="diocesis-image-description">Visítanos en nuestros templos</div>
                </a>
            </div>
            <div class="diocesis-image-wrapper">
                <a href="sacramentos.php">
                    <img src="imagen/index/Lsacramentos.jpg" alt="Imagen Sacramentos" class="diocesis-bw-image">
                    <div class="diocesis-image-title">Sacramentos</div>
                    <div class="diocesis-image-description">Descubre la misericordia del Padre</div>
                </a>
            </div>
            <div class="diocesis-image-wrapper">
                <a href="informes.php">
                    <img src="imagen/index/Lcatequesis.jpg" alt="Imagen Diócesis" class="diocesis-bw-image">
                    <div class="diocesis-image-title">Catequesis</div>
                    <div class="diocesis-image-description">Nútrete de la Palabra de Dios</div>
                </a>
            </div>
            <div class="diocesis-image-wrapper">
                <a href="contacto.php">
                    <img src="imagen/index/Lcontacto.jpg" alt="Imagen Diócesis" class="diocesis-bw-image">
                    <div class="diocesis-image-title">Contáctanos</div>
                    <div class="diocesis-image-description">Nos complace atenderte</div>
                </a>
            </div>
        </div>
    </div>