<html>
    <?php include("header.php"); ?> <!-- componente-->
    <h1>Welcome !</h1>
    <div>
        <form action="#">
            product
            <input type="text" name="name"  id="ProductName" > </br>
            price
            <input type="number" name="price" id="">
            <input type="submit" value="add your list">
        </form>


        <br>
        <br>

        
    </div>
    <?php include("actions/product.php"); ?>
    <?php include("footer.php"); ?>
</html>