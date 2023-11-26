<template>
    <body>
        <h3>Contact</h3>
      <div class="contact-card">
      
        <form accept-charset="UTF-8" action="https://www.formbackend.com/f/{your-identifier}" method="POST">
          <div class="form-fields">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
          </div>
  
          <div class="form-fields">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>
  
          <div class="form-fields">
            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>
          </div>
  
          <button type="submit">Send message</button>
        </form>
      </div>
    </body>
  </template>
  
  <style scoped>
    .contact-card {
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    padding: 20px;
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    margin-right: -49%;
    margin-top: 57px;
    }
  
    h3 {
    margin: auto;
    font-family: 'Raleway', sans-serif;
    font-weight: 900;
    font-size: 48px;
    line-height: 70px;
    color: #042181;
    margin-bottom: 15px;
    text-align: center;
    margin-left: 87%;
    margin-top: 63px;
    }
  
    form {
      margin-top: 20px;
    }
  
    .form-fields {
      margin-bottom: 1rem;
    }
  
    label {
      display: block;
      margin-bottom: 4px;
      font-weight: bold;
      font-size: 0.9rem;
    }
  
    input[type="text"],
    input[type="email"],
    textarea {
      border: 1px solid #ccc;
      font-size: 1rem;
      padding: 6px 10px;
      border-radius: 4px;
      width: 100%;
    }
  
    button[type="submit"] {
      background-color: rgb(67, 56, 202);
      color: white;
      font-size: 0.8rem;
      border: none;
      border-radius: 4px;
      padding: 8px 12px;
      font-weight: 500;
      cursor: pointer;
    }
  </style>
  