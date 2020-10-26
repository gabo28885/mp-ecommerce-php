<html>
    <head>
        <script src="https://www.mercadopago.com/v2/security.js" view=""></script>
    </head>
    <body>
        <div align="center">
            <h1 style="color: forestgreen;">PAGO REALIZADO CON ÉXITO!</h1>
            <h2>Collection_id: <span style="color: #0088cc;"><?php echo $_GET["collection_id"] ?></span></h2>
            <h2>payment_type: <span style="color: #0088cc;"><?php echo $_GET["payment_type"] ?></span></h2>
            <h2>Referencia Externa: <span style="color: #0088cc;"><?php echo $_GET["external_reference"] ?></span></h2>
            <h2>merchant_order_id: <span style="color: #0088cc;"><?php echo $_GET["merchant_order_id"] ?></span></h2>
            <h2>preference_id: <span style="color: #0088cc;"><?php echo $_GET["preference_id"] ?></span></h2>
        </div>
    </body>
</html>
