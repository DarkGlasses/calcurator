<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เครื่องคิดเลข PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 flex justify-center items-center min-h-screen">

    <!-- ตัวคอนเทนเนอร์หลัก -->
    <div class="w-full max-w-3xl bg-white p-10 rounded-lg shadow-2xl space-y-6">

        <!-- ชื่อเครื่องคิดเลข -->
        <h1 class="text-4xl font-bold text-center text-blue-600">CALCURATOR</h1>

        <!-- ฟอร์มกรอกข้อมูล -->
        <form method="post" class="space-y-6">
            
            <!-- ฟิลด์สำหรับหมายเลขที่ 1 -->
            <div>
                <label for="num1" class="block text-xl font-medium text-gray-700">Number 1</label>
                <input type="number" id="num1" name="num1" placeholder="กรอกหมายเลขที่ 1" class="w-full p-5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- ฟิลด์สำหรับหมายเลขที่ 2 -->
            <div>
                <label for="num2" class="block text-xl font-medium text-gray-700">Number 2</label>
                <input type="number" id="num2" name="num2" placeholder="กรอกหมายเลขที่ 2" class="w-full p-5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- ปุ่มคำนวณ -->
            <div class="grid grid-cols-2 gap-6">
                <button type="submit" name="operation" value="add" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-4 rounded-lg text-xl font-medium shadow-md transition duration-200 ease-in-out">+</button>
                <button type="submit" name="operation" value="subtract" class="w-full bg-red-500 hover:bg-red-600 text-white py-4 rounded-lg text-xl font-medium shadow-md transition duration-200 ease-in-out">-</button>
                <button type="submit" name="operation" value="multiply" class="w-full bg-green-500 hover:bg-green-600 text-white py-4 rounded-lg text-xl font-medium shadow-md transition duration-200 ease-in-out">*</button>
                <button type="submit" name="operation" value="divide" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white py-4 rounded-lg text-xl font-medium shadow-md transition duration-200 ease-in-out">/</button>
            </div>
        </form>

        <!-- แสดงผลลัพธ์ -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = '';

            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = 'ไม่สามารถหารด้วยศูนย์ได้';
                    }
                    break;
                default:
                    $result = 'กรุณาเลือกการคำนวณ';
            }

            echo "<div class='mt-6 text-3xl font-semibold text-center text-gray-800'>ผลลัพธ์: <span class='text-green-600'>$result</span></div>";
        }
        ?>

    </div>
</body>
</html>
