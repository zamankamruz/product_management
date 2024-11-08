<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product management</title>
</head>

<style>

   * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

   body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
    }


    body {
        background-color: #f8f9fa;
        color: #333;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        font-size: 2rem;
        color: #343a40;
        margin-bottom: 20px;
        text-align: center;
        font-weight: bold;
    }


    .action-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .action-bar form {
        display: flex;
        gap: 10px;
    }

    .action-bar input[type="text"] {
        padding: 8px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        width: 250px;
    }

    .action-bar button {
        padding: 8px 16px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .action-bar button:hover {
        background-color: #0056b3;
    }

    .action-links a {
        color: #007bff;
        text-decoration: none;
        margin-right: 10px;
        font-size: 0.9rem;
    }

    .action-links a:hover {
        text-decoration: underline;
    }


    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    table thead {
        background-color: #343a40;
        color: #fff;
    }

    table th, table td {
        padding: 15px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    table th {
        font-weight: bold;
        font-size: 0.9rem;
    }

    table tr:nth-child(even) {
        background-color: #f8f9fa;
    }


    table img {
        width: 50px;
        height: auto;
        border-radius: 5px;
    }


    .btn {
        display: inline-block;
        padding: 8px 12px;
        border-radius: 5px;
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        transition: background-color 0.3s;
        font-size: 0.85rem;
    }

    .btn-primary {
        background-color: #28a745;
        color: white !important;
    }

    .btn-primary:hover {
        background-color: #218838;
    }

    .btn-info {
        background-color: #17a2b8;
    }

    .btn-info:hover {
        background-color: #138496;
    }

    .btn-warning {
        background-color: #ffc107;
        color: #212529;
    }

    .btn-warning:hover {
        background-color: #e0a800;
    }

    .btn-danger {
        background-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }


    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination a {
        color: #007bff;
        text-decoration: none;
        padding: 8px 12px;
        margin: 0 5px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .pagination a:hover {
        background-color: #e9ecef;
    }

    .container_Edit {
        max-width: 450px; 
        margin: 30px auto;
        background-color: #ffffff;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 1.5rem; 
        color: #333;
        font-weight: bold;
        margin-bottom: 25px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px; 
    }

    label {
        font-weight: bold;
        color: #555;
        margin-bottom: 4px;
        display: inline-block;
        font-size: 0.9rem;
    }

    .form-control {
        width: 100%;
        padding: 8px; 
        font-size: 0.9rem;
        border: 1px solid #ced4da;
        border-radius: 5px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s;
    }

    .form-control:focus {
        border-color: #80bdff;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
    }

    .product-image {
        display: block;
        width: 80px;
        height: auto;
        border-radius: 6px;
        margin: 10px 0;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-success {
        display: block;
        width: 100%;
        padding: 10px; 
        font-size: 0.9rem;
        font-weight: bold;
        color: #ffffff;
        background-color: #28a745;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.3s ease;
        cursor: pointer;
        text-align: center;
    }

    .btn-success:hover {
        background-color: #218838;
        transform: translateY(-2px);
    }

    .container_Details {
        max-width: 700px;
        margin: 40px auto;
        padding: 0 20px;
    }

    .page-title {
        font-size: 2rem;
        font-weight: bold;
        color: #222;
        text-align: center;
        margin-bottom: 30px;
    }

    .product-card {
        background-color: #ffffff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .product-card:hover {
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        transform: translateY(-5px);
    }

    .product-name {
        font-size: 1.7rem;
        color: #333;
        margin-bottom: 18px;
        font-weight: bold;
        text-align: center;
    }

    .product-info {
        color: #666;
        font-size: 1rem;
        margin: 8px 0;
    }

    .product-info strong {
        color: #333;
    }

    .product-image {
        display: block;
        max-width: 250px;
        height: 250px;
        border-radius: 8px;
        margin: 15px 0;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    .back-button {
        display: inline-block;
        margin-top: 25px;
        padding: 12px 25px;
        font-size: 1rem;
        color: #ffffff;
        background-color: #007bff;
        border: none;
        border-radius: 6px;
        text-align: center;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .back-button:hover {
        background-color: #0056b3;
        transform: translateY(-2px);
    }

    
    .form-container {
        max-width: 500px; 
        margin: 0 auto;
        background-color: #fff;
        padding: 30px; 
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-container h1 {
        font-size: 1.6rem; 
        color: #333;
        margin-bottom: 20px;
        text-align: center;
        font-weight: bold;
    }

    .form-group {
        margin-bottom: 15px; 
        display: flex;
        flex-direction: column;
    }

    .form-group label {
        font-size: 0.85rem; 
        color: #555;
        margin-bottom: 6px;
        font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group input[type="file"],
    .form-group textarea {
        padding: 10px; 
        font-size: 0.9rem; 
        border: 1px solid #ddd;
        border-radius: 5px;
        transition: border-color 0.3s;
    }

    .form-group input[type="text"]:focus,
    .form-group input[type="number"]:focus,
    .form-group textarea:focus,
    .form-group input[type="file"]:focus {
        border-color: #007bff;
        outline: none;
    }

    textarea {
        resize: vertical;
        min-height: 60px; 
    }

    .btn-submit {
        width: 100%;
        padding: 12px; 
        font-size: 0.9rem;
        font-weight: bold;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-submit:hover {
        background-color: #0056b3;
        transform: translateY(-1px);
    }

    .form-container {
        animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }


</style>

<body>


@yield('content')

</body>
</html>