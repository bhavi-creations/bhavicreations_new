



<?php
// PHPMailer క్లాసులను ఇంక్లూడ్ చేస్తున్నాం
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ఒకవేళ మీరు Composer వాడకపోతే, ఈ కింద 3 ఫైళ్లను మీ ఫోల్డర్ లో పెట్టుకుని path ఇవ్వాలి
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name    = strip_tags(trim($_POST["name"]));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone   = strip_tags(trim($_POST["phone"]));
    $company = strip_tags(trim($_POST["company"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all required fields.";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // --- ⚙️ SMTP CONFIGURATION (ఇక్కడే మార్చాలి) ---
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com'; // Gmail వాడుతుంటే ఇది ఇలాగే ఉంచండి
        $mail->SMTPAuth   = true;                                   
        
        // 📍 1. ఇక్కడ మీ Gmail ID ఇవ్వండి
        $mail->Username   = 'manimalladi05@gmail.com';                     
        
        // 📍 2. ఇక్కడ మీ 16-అంకెల App Password ఇవ్వండి (నార్మల్ పాస్‌వర్డ్ కాదు)
        $mail->Password   = 'YOUR_16_DIGIT_APP_PASSWORD';                               
        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
        $mail->Port       = 587;                                    

        // --- 👥 E-MAIL SETTINGS ---
        // 📍 3. ఏ మెయిల్ నుండి వెళ్తోంది (మీ Gmail ID మళ్ళీ ఇవ్వండి)
        $mail->setFrom('manimalladi05@gmail.com', 'Website Contact');
        
        // 📍 4. ఫామ్ డీటెయిల్స్ ఏ మెయిల్‌కి చేరాలో అది (ఇది కూడా మీ మెయిల్ ఇవ్వొచ్చు)
        $mail->addAddress('manimalladi05@gmail.com');     

        // యూజర్ రిప్లై ఇస్తే వాళ్ళ ఈమెయిల్‌కి వెళ్ళడానికి
        $mail->addReplyTo($email, $name);

        // --- 📄 CONTENT ---
        $mail->isHTML(true);                                  
        $mail->Subject = "New Contact Form Submission from " . $name;
        
        // Mail Body
        $email_content = "<h2>New Message Received</h2>";
        $email_content .= "<p><strong>Name:</strong> " . $name . "</p>";
        $email_content .= "<p><strong>Email:</strong> " . $email . "</p>";
        $email_content .= "<p><strong>Phone:</strong> " . (!empty($phone) ? $phone : 'Not Provided') . "</p>";
        $email_content .= "<p><strong>Company:</strong> " . (!empty($company) ? $company : 'Not Provided') . "</p>";
        $email_content .= "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";

        $mail->Body = $email_content;

        // మెయిల్ పంపడం
        $mail->send();
        echo "<script>
                alert('Thank you! Your message has been sent successfully.');
                window.location.href = 'index.html';
              </script>";
    } catch (Exception $e) {
        echo "<script>
                alert('Oops! Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
                window.history.back();
              </script>";
    }
} else {
    echo "Direct access not allowed.";
}
?>