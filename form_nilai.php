<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        <br>
        <?php
            $grade_uts = '';
            if ($nilai_uts >= 55) {
                $grade_uts = 'A';
                echo "<br />Nilai UTS anda bagus";
            } else {
                $grade_uts = 'B';
                echo "<br />Nilai UTS anda perlu diperbaiki";
            }

            echo "<br />Grade Nilai UTS anda : " . $grade_uts;

            switch ($grade_uts) {
                case 'A':
                    echo '<br />Predikat nilai : Sangat Memuaskan';
                    break;
                
                default:
                    echo '<br />Predikat nilai : Memuaskan';
                    break;
            }
        } else {
            echo 'Form belum disubmit';
        }
        ?>
    </div>
</body>
</html>