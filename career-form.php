<?php
  // Get the current domain and protocol
  $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
  $domain = $protocol . "://" . $_SERVER['HTTP_HOST'];
  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Initialize error array
    $errors = [];

    // Sanitize and validate Full Name
    $name = trim($_POST['name']);
    if (empty($name)) {
      $errors[] = "Full Name is required.";
    }

    // Sanitize and validate Email
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Valid Email is required.";
    }

    // Sanitize and validate Portfolio URL (optional)
    $url = trim($_POST['url']);
    if (!empty($url) && !filter_var($url, FILTER_VALIDATE_URL)) {
      $errors[] = "Please enter a valid URL.";
    }

    // Validate and handle file upload
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
      $allowedExtensions = ['pdf', 'doc', 'docx'];
      $fileInfo = pathinfo($_FILES['file']['name']);
      $fileExtension = strtolower($fileInfo['extension']);
      // Check the file size (maximum 10 MB)
      $maxFileSize = 10 * 1024 * 1024; // 10 MB in bytes      
      
      if ($_FILES['file']['size'] > $maxFileSize) {
          $errors[] = "File size exceeds the maximum limit of 10 MB.";
      } elseif (!in_array($fileExtension, $allowedExtensions)) {
        $errors[] = "Invalid file format. Only PDF, DOC, and DOCX are allowed.";
      } else {
        $fileName = uniqid() . '_' . basename($_FILES['file']['name']);
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . $fileName;
        $fileUrl = $domain . '/' . $uploadFile;

        if (!move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
          $errors[] = "Failed to upload the file.";
        }
      }
    } else {
      $errors[] = "Please attach your resume.";
    }

    // Check if there are any errors
    if (empty($errors)) {
      // Prepare the message
      $message = "Full Name: $name\n";
      $message .= "Email: $email\n";
      if (!empty($url)) {
        $message .= "Portfolio URL: $url\n";
      }
      $message .= "Message: " . trim($_POST['message']) . "\n";
      $message .= "Resume: $fileUrl\n";

      // Email headers
      $headers = "From: career@hiteshtechnologies.com\r\n";
      $headers .= "Reply-To: $email\r\n";

      // Send email to the admin
      $adminEmail = "career@hiteshtechnologies.com";
      $subject = "New Career Form Submission";
      if (mail($adminEmail, $subject, $message, $headers)) {
        // Send confirmation email to the user
        $userSubject = "Thank you for your submission!";
        $userMessage = "Dear $name,\n\nThank you for submitting your resume. We will review your application and get back to you shortly.\n\nBest regards,\nCompany Name";
        mail($email, $userSubject, $userMessage, $headers);

        // Respond with success message
        echo "success";
      } else {
        echo "There was an issue sending your email. Please try again later.";
      }
    } else {
      // Respond with error messages
      echo implode("\n", $errors);
      exit;
    }
  }
?>