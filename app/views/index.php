<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Information</title>

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
            width: 75%;
            max-width: 900px;
            margin: 60px auto;
        }

        .notice {
            background: #fff3cd;
            border-left: 4px solid #d39e00;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .card {
            background: white;
            padding: 38px;
            border-radius: 15px;
            border: 1px solid #d4e2dc;
            box-shadow: 0 8px 25px rgba(0, 0, 0, .06);
        }

        .small-title {
            color: #007a55;
            font-weight: bold;
            letter-spacing: 1px;
            font-size: 13px;
        }

        h1 {
            margin: 12px 0 5px;
            font-size: 35px;
        }

        .description {
            color: #69756f;
            margin-bottom: 30px;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }

        .box {
            padding: 18px;
            border: 1px solid #d6e3dd;
            background: #f5f9f7;
            border-radius: 10px;
        }

        .label {
            display: block;
            font-size: 12px;
            color: #68756f;
            margin-bottom: 7px;
        }

        .value {
            font-weight: bold;
        }

        .status {
            margin-top: 25px;
            padding: 16px;
            background: #e9f5ef;
            border-left: 4px solid #00875f;
            border-radius: 5px;
        }

        @media(max-width:700px) {
            .container {
                width: 92%;
            }

            .grid {
                grid-template-columns: 1fr;
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

    <?php if (!empty($middleware_denied)): ?>

        <div class="notice">
            <strong>StudentMiddleware:</strong>
            Unauthorized profile access was blocked.
        </div>

    <?php endif; ?>

    <div class="card">

        <div class="small-title">
            STUDENT INFORMATION PAGE
        </div>

        <h1>
            Welcome, <?= htmlspecialchars($name) ?>
        </h1>

        <p class="description">
            Basic student information displayed using LavaLust Controller and View.
        </p>

        <div class="grid">

            <div class="box">
                <span class="label">Student ID</span>
                <span class="value">
                    <?= htmlspecialchars($student_id) ?>
                </span>
            </div>

            <div class="box">
                <span class="label">Student Name</span>
                <span class="value">
                    <?= htmlspecialchars($name) ?>
                </span>
            </div>

            <div class="box">
                <span class="label">Course</span>
                <span class="value">
                    <?= htmlspecialchars($course) ?>
                </span>
            </div>

            <div class="box">
                <span class="label">Year Level</span>
                <span class="value">
                    <?= htmlspecialchars($year) ?>
                </span>
            </div>

            <div class="box">
                <span class="label">Section</span>
                <span class="value">
                    <?= htmlspecialchars($section) ?>
                </span>
            </div>

            <div class="box">
                <span class="label">Email</span>
                <span class="value">
                    <?= htmlspecialchars($email) ?>
                </span>
            </div>

        </div>

        <div class="status">
            <strong>Student Profile:</strong>
        </div>

    </div>

</div>

</body>
</html>