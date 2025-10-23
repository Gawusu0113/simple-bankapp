<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank App Dashboard</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined');
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
            max-width: 600px;
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
            max-width: 700px;
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
        .card-row {
            display: flex;
            gap: 32px;
            justify-content: center;
            margin-top: 24px;
            flex-wrap: wrap;
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
            margin-bottom: 0;
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
        .card-btn.withdraw {
            background: linear-gradient(120deg, #ffebee 60%, #f7fafd 100%);
            color: #c62828;
        }
        .card-btn.withdraw:hover {
            box-shadow: 0 8px 32px rgba(198,40,40,0.16);
            background: #ffcdd2;
            color: #8e0000;
            transform: translateY(-3px) scale(1.04);
        }
        .card-btn.transfer {
            background: linear-gradient(120deg, #e3f2fd 60%, #f7fafd 100%);
            color: #1565c0;
        }
        .card-btn.transfer:hover {
            box-shadow: 0 8px 32px rgba(21,101,192,0.16);
            background: #bbdefb;
            color: #003c8f;
            transform: translateY(-3px) scale(1.04);
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-inner">
            <a href="index.php" class="active">Home</a>
            <a href="deposit.php">Deposit</a>
            <a href="withdraw.php">Withdraw</a>
            <a href="transfer.php">Transfer</a>
        </div>
    </div>
    <div class="main-section">
        <div class="main-title">Welcome to Your Bank</div>
        <div class="main-subtitle">Choose an action to manage your account</div>
        <div class="card-row">
            <a href="deposit.php" style="text-decoration:none;">
                <button class="card-btn deposit">
                    <span class="icon">savings</span>
                    Deposit
                </button>
            </a>
            <a href="withdraw.php" style="text-decoration:none;">
                <button class="card-btn withdraw">
                    <span class="icon">account_balance_wallet</span>
                    Withdraw
                </button>
            </a>
            <a href="transfer.php" style="text-decoration:none;">
                <button class="card-btn transfer">
                    <span class="icon">sync_alt</span>
                    Transfer Funds
                </button>
            </a>
        </div>
    </div>
</body>
</html>
