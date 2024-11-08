<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Il tuo ordine</title>
	<style>
	.container {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
            color: #333;
        }
		.menu-section {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            width: 500px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        header {
            background-color: #c0392b;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
        }
		.image-section {
            margin-bottom: 20px;
            text-align: center;
        }

        .image-section img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
        }
	</style>
</head>
<body>


<form action="sitoalbss.html">
    <header> I tuoi ordini: </header>
	<div class="container">


        <div class="menu-section">
            <div class="image-section">
                <img src="images/piatti_tipici.jpg" alt="Piatti Tipici Albanesi">
            </div>
            <h2>Il tuo piatto:</h2>
			<?php echo $_POST['piatto'];?>
                
        </div>


        <div class="menu-section">
            <div class="image-section">
                <img src="images/bevande.jpg" alt="Bevande">
            </div>
            <h2>La tua bevanda:</h2>
			<?php echo $_POST['bevanda']; ?>

        </div>


        <div class="menu-section">
            <div class="image-section">
                <img src="images/dessert.jpg" alt="Dessert">
            </div>
            <h2>Il tuo dessert:</h2>
			<?php echo $_POST['dessert1']; ?>
        </div>

    </div>
	<div style="text-align:center;">
		<button type="submit">Torna alla home</button>
	</div>
	</form>
</body>
</html>