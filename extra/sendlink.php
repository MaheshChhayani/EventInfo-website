<?php
                    if(isset($_POST['submit_email']) && $_POST['email'])
                {
                
                $email_id= $_POST['email'];
                $conn=new mysqli("localhost","root","","eveinfo1");
                    while(1){
						
                        $sql = "SELECT * FROM adminmaster WHERE a_email = '$email_id'";
                      $result = $conn->query($sql);
                      $count = mysqli_num_rows($result);  
                      if($count==1){
                        $not_found=1;
                        while($data=mysqli_fetch_array($result))
                        {
                           $receiptant = $data['email_id'];
                          $email=$data['email_id'];
                          $pass=$data['password'];
                        }
                        break;
                      }
                     
                        $sql = "SELECT * FROM usermaster WHERE u_email = '$email_id'";
                        $result = $conn->query($sql);
                        $count = mysqli_num_rows($result);  
                        if($count==1){
                            $not_found=1;
                            while($data=mysqli_fetch_array($result))
                            {
                                $receiptant = $data['email_id'];
                                $email=$data['email_id'];
                                $pass=$data['password'];
                            }
                         break;
                        }

						
                        break; 
                      }
                      if($not_found == 1){
                    $link="<a href='localhost/eve/resetpassword.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
                    require_once('phpmail/class.phpmailer.php');
                    $mail = new PHPMailer();
                    $mail->CharSet =  "utf-8";
                    $mail->IsSMTP();
                    // enable SMTP authentication
                    $mail->SMTPAuth = true;                  
                    // GMAIL username
                    $mail->Username = "eveinfo@gmail.com";
                    // GMAIL password
                    $mail->Password = "@dm!np@55";
                    $mail->SMTPSecure = "ssl";  
                    // sets GMAIL as the SMTP server
                    $mail->Host = "smtp.gmail.com";
                    // set the SMTP port for the GMAIL server
                    $mail->Port = "465";
                    $mail->From='eveinfo@gmail.com';
                    $mail->FromName='Event Admin';
                    $mail->AddAddress($receiptant);
                    $mail->Subject  =  'Reset Password';
                    $mail->IsHTML(true);
                    $mail->Body    = 'Click On This Link to Reset Password '.$link.'';
                    if($mail->Send())
                    {
                    ?>
                    <h3 class="box-title m-b-20"><?php  echo "Check Your EmailID:- '$receiptant' and Click on the link sent to your email";?></h3>
                    <?php
                    }
                    else
                    {
                    ?>
                    <h3 class="box-title m-b-20"><?php  echo "Mail Error - >".$mail->ErrorInfo;?></h3>
                    <?php
                        }
                    }
                    else {
                        header('Location: index.php');
                    }
                }	
                ?>