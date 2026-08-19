<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Student Profile</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f8f5;
            color: #17231f;
        }

        header {
            background: #007a55;
            color: white;
            height: 70px;
            padding: 0 13%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h2 {
            margin: 0;
        }

        nav {
            display: flex;
            gap: 28px;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        .container {
            width: 70%;
            max-width: 760px;
            margin: 60px auto;
        }

        .card {
            background: white;
            padding: 38px;
            border-radius: 15px;
            border: 1px solid #d4e2dc;
            box-shadow: 0 8px 25px rgba(0,0,0,.06);
        }

        .middleware {
            background: #e7f5ee;
            color: #146046;
            border-left: 4px solid #00875f;
            padding: 15px;
            margin-bottom: 25px;
            border-radius: 5px;
        }

        .small-title {
            color: #007a55;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        h1 {
            margin: 10px 0 25px;
        }

        .row {
            padding: 15px 5px;
            border-bottom: 1px solid #e1e7e4;
        }

        .label {
            display: block;
            color: #69756f;
            font-size: 12px;
            margin-bottom: 5px;
        }

        .value {
            font-weight: bold;
        }

        @media(max-width:700px) {

            .container {
                width: 92%;
            }

        }

    </style>

</head>

<body>

<header>

    <h2>Student Information</h2>

    <nav>

        <a href="<?= base_url('student') ?>">
            Home
        </a>

        <a href="<?= base_url('student/profile') ?>">
            Profile
        </a>

    </nav>

</header>

<div class="container">

    <div class="card">

        <div class="middleware">
            ✓ Access allowed by StudentMiddleware
        </div>

        <div class="small-title">
            STUDENT PROFILE
        </div>

        <h1>
            <?= htmlspecialchars($name) ?>
        </h1>

        <div class="row">
            <span class="label">Student ID</span>
            <span class="value">
                <?= htmlspecialchars($student_id) ?>
            </span>
        </div>

        <div class="row">
            <span class="label">Student Name</span>
            <span class="value">
                <?= htmlspecialchars($name) ?>
            </span>
        </div>

        <div class="row">
            <span class="label">Course</span>
            <span class="value">
                <?= htmlspecialchars($course) ?>
            </span>
        </div>

        <div class="row">
            <span class="label">Year Level</span>
            <span class="value">
                <?= htmlspecialchars($year) ?>
            </span>
        </div>

        <div class="row">
            <span class="label">Section</span>
            <span class="value">
                <?= htmlspecialchars($section) ?>
            </span>
        </div>

        <div class="row">
            <span class="label">Email</span>
            <span class="value">
                <?= htmlspecialchars($email) ?>
            </span>
        </div>

    </div>

</div>

</body>
</html>