<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            background: linear-gradient(135deg, #f5f2eb 0%, #eaddd3 100%); 
            margin: 0; 
            padding: 0;
            font-family: 'Sarabun', sans-serif;
            color: #4a3f35;   
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: #ffffff; 
            width: 100%;
            max-width: 550px;
            margin: 40px 20px; 
            padding: 40px; 
            border-radius: 24px; 
            box-shadow: 0 4px 6px -1px rgba(177, 158, 143, 0.1), 0 20px 40px -8px rgba(177, 158, 143, 0.3);
            box-sizing: border-box;
            position: relative;
            overflow: hidden;
        }

        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, #b19e8f, #cfc0b5);
        }

        h1 {
            color: #6e5f53; 
            text-align: center; 
            font-size: 1.4rem; 
            font-weight: 700;
            margin-top: 5px;
            margin-bottom: 5px;
            letter-spacing: 0.5px;
        }

        .sub-title {
            text-align: center;
            color: #a39385;
            font-size: 0.9rem;
            margin-bottom: 25px;
        }

        .nav-link {
            display: inline-block;
            color: #b19e8f;
            text-decoration: none;
            font-weight: 600;
            padding: 6px 16px;
            border: 1px solid #eaddd3;
            border-radius: 20px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            background-color: #fdfcfb;
        }

        .nav-link:hover {
            color: white;
            background-color: #b19e8f;
            border-color: #b19e8f;
            box-shadow: 0 4px 10px rgba(177, 158, 143, 0.2);
        }

        .form-group {
            margin-top: 30px;
            margin-bottom: 25px;
            background-color: #fdfcfb;
            padding: 20px;
            border-radius: 16px;
            border: 1px solid #f0eae1;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 10px;
            color: #6e5f53;
            font-size: 1rem;
            text-align: center;
        }

        .input-row {
            display: flex;
            gap: 12px;
        }

        input[type="number"] {
            flex: 1;
            padding: 14px;
            border: 2px solid #e3ded6;
            border-radius: 12px;
            font-family: 'Sarabun', sans-serif;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
            background-color: #ffffff;
            font-weight: bold;
            color: #4a3f35;
        }

        /* เอฟเฟกต์ตอนคลิกช่องกรอกตัวเลขให้เรืองแสงสวยๆ */
        input[type="number"]:focus {
            border-color: #b19e8f;
            box-shadow: 0 0 0 4px rgba(177, 158, 143, 0.15);
        }

        input[type="submit"] {
            background-color: #b19e8f;
            color: white;
            border: none;
            padding: 14px 28px;
            border-radius: 12px;
            cursor: pointer;
            font-family: 'Sarabun', sans-serif;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(177, 158, 143, 0.3);
        }

        input[type="submit"]:hover {
            background-color: #9c8a7b;
            box-shadow: 0 6px 16px rgba(156, 138, 123, 0.4);
            transform: translateY(-1px);
        }

        input[type="submit"]:active {
            transform: translateY(1px);
        }


        .result-box {
            margin-top: 30px;
            background-color: #ffffff;
            border: 1px solid #eaddd3;
            border-radius: 16px;
            padding: 5px; 
            color: #5a4f44;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.02);
            overflow: hidden;
        }

        .result-title {
            font-weight: 700;
            color: #ffffff;
            background-color: #b19e8f; 
            margin: 0;
            padding: 12px 20px;
            font-size: 1.1rem;
            border-radius: 12px 12px 0 0;
            text-align: center;
            letter-spacing: 1px;
        }

        .result-row {
            padding: 10px 20px;
            font-size: 1.1rem;
            line-height: 1.6;
            letter-spacing: 3px; 
            text-align: center;
            border-bottom: 1px solid #f7f4f0;
            transition: background-color 0.2s;
        }

        .result-row:last-child {
            border-bottom: none;
        }

        
        .result-row:nth-child(even) {
            background-color: #faf8f5;
        }

        
        .result-row:hover {
            background-color: #f1ede6;
        }
    </style>
</head>
<body>

<div class="container"> 

    <h1>งานที่ 1 ณภัชชา พฤกษาวงษ์</h1>
    <div class="sub-title">BIT2/4 ชั้นปีที่ 2 เลขที่ 17</div>
    
    <div style="text-align: center; margin-bottom: 10px;">
        <a href="index.php" class="nav-link">forloop</a>
    </div>

    <form action="" class="form-group">
        <label for="num">เลขแม่สูตรคูณ</label>
        <label for="num"></label>
        <div class="input-row">
            <input type="number" name="num" id="num" placeholder="กรอกตัวเลข..." required value="<?php echo isset($_GET['num']) ? htmlspecialchars($_GET['num']) : ''; ?>">
            <input type="submit" value="คำนวณ">
        </div>
    </form>

    <?php
        if(isset($_GET["num"]) && $_GET["num"] !== ""){
            $num = intval($_GET["num"]);

            echo "<div class='result-box'>";
            echo "<div class='result-title'>ตารางสูตรคูณแม่ " . $num . "</div>" ;

            $i = 9; 
            while ($i >= 1) { 
                
                echo "<div class='result-row'>" . $num . " &times; " . $i . " = " . ($num * $i) . "</div>";
                $i--;
            }

            echo "</div>";
        }
    ?>

</div>
    
</body>
</html>