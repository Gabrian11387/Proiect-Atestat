    <style>
    div.cartonas{
        height: 300px;
        border: 3px solid white;
        border-radius: 10px 50px 10px 50px;
    }

    #fotbal_cart{
        background-image: url("http://localhost/Atestat%20Personalitati%20sportive/imagini/fundal/fotbal.jpg");
        background-size: cover; 
        background-repeat: no-repeat;
    }

    #tenis_cart{
        background-image: url("http://localhost/Atestat%20Personalitati%20sportive/imagini/fundal/tenis.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }

    #baschet_cart{
        background-image: url("http://localhost/Atestat%20Personalitati%20sportive/imagini/fundal/baschet.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }

    #cricket_cart{
        background-image: url("http://localhost/Atestat%20Personalitati%20sportive/imagini/fundal/cricket.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }

    div.cartonas:hover{
        opacity: 0.8;
    }

    div.logo{
        background-image: url("/imagini/olimpic.gif");
        background-size: cover;
        background-repeat: no-repeat;
        color: white;
    }

    .pozica{
        width: 15px;
        height: 15px;
    }

    #cartonas_jucator{
        border: 2px solid black;
    }
    </style>


    <style>
        .cartonas_jucator{
           display: inline-grid;
           grid-template-columns: 221px;
           grid-template-rows: 180px 65px 58px;
           grid-template-areas: "image" "textul" "stats";

           border: 2.8px solid white;
           border-bottom: 1.5px solid white;
           font-family: roboto;
           border-radius: 18px;
           background: white;
           box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.9);
           text-align: center;
           transition: 0.25s ease;
           cursor: pointer;
           position: relative;
        }
        .cartonas_imagine{
            grid-area: image;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            background-size: cover;
        }
        .cartonas_text{
            grid-area: textul;
        }
        .cartonas_statistici{
            grid-area: stats;
            display: inline-grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: auto;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            background: black;
        }
        .cartonas_statistici .stat{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 6px;
            color: white;
        }
        
        .cartonas_jucator:hover{
            transform: scale(1.05);
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.6);
        }
        .ascuns_votare{
            background: transparent;
            border: none !important;
        }
        #buton_vot{
            position: fixed;
            bottom: 15px;
            display: block;
            right: 15px;
            font-size: 20px;
            display: none;
        }
    </style>

    <style>
        body.pagina_principala{
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #bae0d6;
        }
        .hero-image{
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("./imagini/fundal/fundal_home.jpg");
            height: 93.5%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }
        .prez-juc{
            width: 80%;
            height: 65%;
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 20px;
        }

        
    </style>