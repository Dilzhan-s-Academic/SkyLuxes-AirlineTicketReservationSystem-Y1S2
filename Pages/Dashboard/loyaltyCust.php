<!--Dilshan Yapa S Y C T it23366572-->

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <style>
            .headding {
                margin-top: 50px;
            }
            .loyaltyaccDetailContainer {
                border: 0.5px solid rgba(83, 83, 172, 0.425);
                border-radius: 5px;
                box-shadow: 0 5px 10px rgba(0,0,0,0.5);
                max-width: 100%;
                padding: 30px 20px 30px 20px;
                background-color: #d8d9d85f;
                margin-top:30px;
            }
            .loyaltyaccDetailContainer {
                opacity: 0.5;
                pointer-events: none;
                cursor: not-allowed;
            }
            h1,h2 {
                text-align: left;
            }
            h1 {
                
                margin-bottom: -10px;
            }
            span {
                display: flex;
                margin: 10px;
            }
            .btns {
                display: flex;
                justify-content: flex-end;
            }
            button {
                padding: 10px 20px;
                margin: 10px;
                background-color: blueviolet;
                color: aliceblue;
                font-weight: 500;
                border-radius: 10px;
            }
        </style>
    </head>
        <body>
            <h1 class="headding">Loyalty Customer</h1>
            <div class="err">
                <span>&#9888; Dear customers, we're currently working on implementing the Loyalty Customer Feature, thank you for your patience.</span>
            </div>
            <div class="loyaltyaccDetailContainer" aria-disabled="true">
                <h2>Loyalty Customer Details</h2>
                
                <span> Tier Status :</span>
                <span> Points :</span>
                <div class="btns">
                    <button>Transaction History</button>
                    <button>Refferal Program</button>
                    <button>Rewards</button>    
                </div>
                
            </div>
        </body>
</html>