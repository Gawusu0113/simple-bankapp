<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit Funds</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        body {
            font-family: 'Inter', Arial, sans-serif;
            background: linear-gradient(120deg, #e3eafc 0%, #f7fafd 100%);
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }
        .navbar {
            background: linear-gradient(90deg, #233a7c 0%, #3e5ba9 100%);
            color: #fff;
            padding: 0;
            text-align: center;
            margin: 0 auto 38px auto;
            border-radius: 0 0 18px 18px;
            box-shadow: 0 2px 12px rgba(30,60,120,0.10);
            max-width: 500px;
        }
        .navbar-inner {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 36px;
            min-height: 62px;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.13em;
            transition: color 0.2s, background 0.2s;
            display: flex;
            align-items: center;
            padding: 10px 18px;
            border-radius: 8px;
            letter-spacing: 0.5px;
        }
        .navbar a:hover, .navbar a.active {
            background: rgba(255,255,255,0.10);
            color: #ffd600;
        }
        .main-section {
            max-width: 420px;
            margin: 48px auto 0 auto;
            padding: 32px 28px 36px 28px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 6px 32px rgba(30,60,120,0.10), 0 1.5px 6px rgba(30,60,120,0.07);
        }
        .main-title {
            text-align: center;
            font-size: 2em;
            font-weight: 700;
            color: #1a237e;
            margin-bottom: 8px;
            letter-spacing: 1px;
        }
        .main-subtitle {
            text-align: center;
            color: #607d8b;
            font-size: 1.08em;
            margin-bottom: 32px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #233a7c;
            font-weight: 600;
        }
        input[type="number"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 22px;
            border: 1.5px solid #b0bec5;
            border-radius: 6px;
            font-size: 1.08em;
            background: #f7fafd;
            transition: border 0.2s;
        }
        input[type="number"]:focus {
            border: 1.5px solid #233a7c;
            outline: none;
        }
        .card-btn-row {
            display: flex;
            gap: 32px;
            justify-content: center;
            margin-top: 24px;
        }
        .card-btn {
            flex: 1 1 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 18px rgba(30,60,120,0.10);
            padding: 32px 0 22px 0;
            min-width: 150px;
            border: none;
            cursor: pointer;
            font-size: 1.18em;
            font-weight: 700;
            color: #233a7c;
            letter-spacing: 0.5px;
            transition: box-shadow 0.2s, background 0.2s, color 0.2s, transform 0.2s;
            position: relative;
        }
        .card-btn .icon {
            font-family: 'Material Symbols Outlined';
            font-size: 2.2em;
            margin-bottom: 10px;
            display: block;
        }
        .card-btn.deposit {
            background: linear-gradient(120deg, #e8f5e9 60%, #f7fafd 100%);
            color: #388e3c;
        }
        .card-btn.deposit:hover {
            box-shadow: 0 8px 32px rgba(56,142,60,0.16);
            background: #d0f8ce;
            color: #256029;
            transform: translateY(-3px) scale(1.04);
        }
        .card-btn.back {
            background: linear-gradient(120deg, #eceff1 60%, #f7fafd 100%);
            color: #607d8b;
        }
        .card-btn.back:hover {
            box-shadow: 0 8px 32px rgba(96,125,139,0.16);
            background: #cfd8dc;
            color: #233a7c;
            transform: translateY(-3px) scale(1.04);
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-inner">
            <a href="index.php">Home</a>
            <a href="deposit.php" class="active">Deposit</a>
            <a href="withdraw.php">Withdraw</a>
            <a href="transfer.php">Transfer</a>
        </div>
    </div>
    <div class="main-section">
        <div class="main-title">Deposit Funds</div>
        <div class="main-subtitle">Add money to your account securely and instantly</div>
        <form method="post" action="#" style="margin-bottom:32px;">
            <label for="amount">Amount</label>
            <input type="number" id="amount" name="amount" min="1" step="0.01" placeholder="Enter amount" required>
            <div class="card-btn-row">
                <button type="submit" class="card-btn deposit">
                    <span class="icon">savings</span>
                    Deposit
                </button>
               <a href="index.php" style="text-decoration:none;width:100%">
                    <button type="button" class="card-btn back">
                        <span class="icon">arrow_back</span>
                        Back
                    </button>
                </a>
            </div>
        </form>
    
    </div>
</body>
</html>
