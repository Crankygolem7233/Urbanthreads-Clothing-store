<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Urban Threads - Clothing Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        body { 
            font-family: 'Poppins', Arial, sans-serif; 
            margin: 0; 
            padding: 30px; 
            background: #fcf6ed; 
            color: #2c2c2c;
            line-height: 1.6;
        }

        header { 
            text-align: center; 
            margin-bottom: 35px; 
            padding: 35px 20px;
            background: #2b2623;
            color: #fcf6ed;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }

        header h1 {
            margin: 0;
            font-size: 36px;
            letter-spacing: 1.5px;
            font-weight: 600;
        }

        header p {
            margin: 8px 0 0 0;
            color: #d1c7bc;
            font-size: 15px;
            font-weight: 300;
        }

        .section { 
            background: #ffffff; 
            padding: 30px; 
            margin-bottom: 30px; 
            border-radius: 12px; 
            box-shadow: 0 6px 20px rgba(43, 38, 35, 0.04); 
            border: 1px solid #f0e6dc;
        }

        .section h2 {
            margin-top: 0;
            font-size: 24px;
            color: #2b2623;
            border-bottom: 2px solid #f9f1eb;
            padding-bottom: 12px;
            font-weight: 600;
        }

        .section p {
            color: #555;
            font-size: 15px;
        }

        .grid { 
            display: flex; 
            gap: 25px; 
            flex-wrap: wrap; 
            margin-top: 20px;
        }

        .card { 
            border: 1px solid #f0e6dc; 
            padding: 18px; 
            border-radius: 10px; 
            width: 210px; 
            text-align: center; 
            background: #fff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.02);
            transition: transform 0.3s ease, box-shadow 0.3s ease; 
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 14px 28px rgba(43, 38, 35, 0.1);
        }

        .card h3 {
            font-size: 17px;
            margin: 12px 0 6px 0;
            color: #2b2623;
        }

        .card p {
            margin: 4px 0;
            font-size: 14px;
            color: #666;
        }

        .about-list {
            margin-top: 15px;
            padding-left: 20px;
            color: #555;
        }

        .about-list li {
            margin-bottom: 8px;
        }

        input[type="number"], input[type="email"], button { 
            padding: 12px 18px; 
            margin-top: 10px; 
            font-size: 15px; 
            border: 1px solid #d1c7bc;
            border-radius: 6px;
            font-family: 'Poppins', sans-serif;
        }

        input[type="number"], input[type="email"] {
            width: 260px;
            background: #fdfbf7;
        }

        button {
            background-color: #2b2623;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: background 0.2s, transform 0.2s;
        }

        button:hover {
            background-color: #4a413d;
            transform: translateY(-1px);
        }

        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px; 
            border-radius: 8px;
            overflow: hidden;
        }

        th, td { 
            border: 1px solid #f0e6dc; 
            padding: 14px; 
            text-align: left; 
            font-size: 14px;
        }

        th { 
            background: #2b2623; 
            color: white; 
            font-weight: 500;
        }

        tr:nth-child(even) {
            background-color: #fcf6ed;
        }
    </style>
</head>
<body>

    <header>
        <h1>Urban Threads </h1>
        <p>Your Minimalist Fashion Store</p>
    </header>

    <!-- ABOUT US SECTION WITH CONTACT DETAILS -->
    <div class="section">
        <h2 style="text-align: center;">About Us</h2>
	<p><strong>who Is Us?</strong></p>
        <ul>
            <li><strong>Srijan Vaid</strong> </li>
            <li><strong>Shrenik R Aradhya</strong> </li>
            <li><strong>Suprith A</strong> </li>
        </ul>

        <p>Welcome to <strong>Urban Threads</strong>, your ultimate destination for modern, comfortable, and conscious everyday fashion.</p>
          
        <p><strong>Why Choose Us?</strong></p>
        <ul class="about-list">
            <li><strong>Premium Craftsmanship</strong></li>
            <li><strong>Inclusive Styling</strong> </li>
            <li><strong>Customer First Approach</strong> </li>
        </ul>

        <p style="margin-top: 20px;"><strong>Get in Touch:</strong></p>
        <p style="margin: 4px 0;">📞 Telephone: +91 97422 55187</p>
        <p style="margin: 4px 0;">📧 Email: shrenikrabca26@blr.rvu.edu.in</p>
    </div>

    <!-- FIRST HALF: Clothing Store Catalog with Hover Effect -->
    <div class="section">
        <h2 style="text-align: center;">Featured Collection</h2>
        <p>Hover over any item to explore our top picks of the season.</p>
        <div class="grid">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1dJCGFN0moPo9t8PMOLXBa_Lkk-mRIsro1g8v1UlPUw&s=10" alt="Product Image" style="width:100%; height:250px; object-fit:cover; border-radius:6px;">
                <h3>Classic Black Hoodie</h3>
                <p>₹1,299</p>
                <p style="color: #8c7865; font-weight:500;">ID: 101</p>
            </div>
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaPuEDpMzd-A3ed6Zb-k56b1_Y2lMqTpi1OOtASL0Rkw&s" alt="Product Image" style="width:100%; height:250px; object-fit:cover; border-radius:6px;">
                <h3>Oversized Tee</h3>
                <p>₹699</p>
                <p style="color: #8c7865; font-weight:500;">ID: 102</p>
            </div>
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU0roqo2R8zMGLEA1R37qMXBL_xWfsBbuWK5MiIXRdiw&s=10" alt="Product Image" style="width:100%; height:250px; object-fit:cover; border-radius:6px;">
                <h3>Slim Denim Jeans</h3>
                <p>₹1,499</p>
                <p style="color: #8c7865; font-weight:500;">ID: 103</p>
            </div>
            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH_EwkkWBgPQ0SNFm9jdXC39sYj7Td299jsXGuso4QWQ&s" alt="Product Image" style="width:100%; height:250px; object-fit:cover; border-radius:6px;">
            <h3>Cargo Utility Pants</h3>
            <p>₹1,799</p>
            <p style="color: #8c7865; font-weight:500;">ID: 104</p>
        </div>
        </div>
    </div>

    <!-- SECOND HALF: Product Number Lookup System -->
    <div class="section">
        <h2 style="text-align: center;">Product Lookup </h2>
        <p>Enter a product number to query real-time details from your database:</p>
              <form method="GET" action="">
            <input type="number" name="prod_id" placeholder="Enter ID (e.g. 101, 102...)" required>
            <button type="submit">Search Product</button>
        </form>

        <?php
        if (isset($_GET['prod_id'])) {
            $conn = mysqli_connect("localhost", "root", "", "clothing_store");
            
            if (!$conn) {
                echo "<p style='color:red;'>Database connection failed.</p>";
            } else {
                $id = mysqli_real_escape_string($conn, $_GET['prod_id']);
                $sql = "SELECT * FROM products WHERE product_id = '$id'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    echo "<table>";
                    echo "<tr><th>ID</th><th>Name</th><th>Category</th><th>Price</th><th>Status</th></tr>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['product_id'] . "</td>";
                        echo "<td>" . $row['product_name'] . "</td>";
                        echo "<td>" . $row['category'] . "</td>";
                        echo "<td>₹" . $row['price'] . "</td>";
                        echo "<td>" . $row['stock_status'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p style='color:red; margin-top:15px;'>No product found with ID: $id</p>";
                }
                mysqli_close($conn);
            }
        }
        ?>
    </div>

    <!-- SHIPPING & POLICIES SECTION -->
    <div class="section">
        <h2 style="text-align: center;">Shipping & Store Policies</h2>
        <p>We offer fast pan-India delivery within 3-5 business days. Enjoy free shipping on all orders above ₹999. If you are unsatisfied with your size, our store supports an easy 7-day exchange window with zero hassle.</p>
    </div>

    <!-- ABSOLUTE BOTTOM: USER EMAIL SUBSCRIPTION SECTION -->
    <div class="section" style="margin-bottom: 0;">
        <h2 style="text-align: center;"	>Interested in Updates?</h2>
        <p>Enter your email below to get notified about new arrivals, restocks, and exclusive discounts:</p>

        <form method="POST" action="">
            <input type="email" name="user_email" placeholder="Enter your email address..." required>
            <button type="submit" name="subscribe_btn">Subscribe</button>
        </form>

        <?php
        if (isset($_POST['subscribe_btn'])) {
            $conn = mysqli_connect("localhost", "root", "", "clothing_store");

            if (!$conn) {
                echo "<p style='color:red;'>Database connection failed.</p>";
            } else {
                $email = mysqli_real_escape_string($conn, $_POST['user_email']);
                $insert_sql = "INSERT INTO subscribers (email) VALUES ('$email')";

                if (mysqli_query($conn, $insert_sql)) {
                    echo "<p style='color:green; margin-top:15px;'>Thank you! Your email (<strong>$email</strong>) has been saved for future updates.</p>";
                } else {
                    echo "<p style='color:red; margin-top:15px;'>Error saving email. Please try again.</p>";
                }
                mysqli_close($conn);
            }
        }
        ?>
    </div>

</body>
</html>