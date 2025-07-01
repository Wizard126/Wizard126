<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Fiverr Style Sign Up</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
  /* Custom fonts and overrides */
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
  body {
    font-family: 'Inter', sans-serif;
  }
  /* Scrollbar for container - optional */
  /* Rounded corners for left panel image and background */
  .left-panel {
    background-color: #8b2d40;
    border-top-left-radius: 20pxpx;
    border-bottom-left-radius: 12px;
    position: relative;
    overflow: hidden;
  }
  .left-panel h2 {
    font-weight: 700;
    font-size: 1.875rem; /* 30px */
    line-height: 2.0rem;
    color: #ffffff;
  }
  .left-panel ul {
    margin-top: 5rem;
    color: white;
    font-weight: 400;
    font-size: 1.125rem; /* 18px */
    line-height: 2rem;
  }
  .left-panel ul li {
    margin-top: 1rem;
    list-style: none;
    position: relative;
    padding-left: 1.75rem;
  }
  .left-panel ul li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #ebebeb;
    font-weight: 600;
  }
  .left-panel img {
    position: absolute;
    bottom: 0;
    left: 9.9%;
    transform: translateX(-10%);
    max-width: 100%;
    max-height: 150%;
    object-fit: contain;
    user-select:none;
  }
  /* Divider line OR between social buttons */
  .divider {
    display: flex;
    align-items: center;
    margin: 1.5rem 0;
    color: #a0a0a0;
    font-weight: 600;
    font-size: 0.875rem;
  }
  .divider::before, .divider::after {
    content: "";
    flex-grow: 1;
    background: #e0e0e0;
    height: 1px;
    font-size: 0;
    line-height: 0;
    margin: 0 1rem;
  }
  /* Button styles */
  .btn-primary, .btn-secondary, .btn-social {
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 0.5rem;
    font-weight: 600;
    font-size: 1rem;
    padding: 0.75rem 1.25rem;
    cursor: pointer;
    transition: all 0.15s ease-in-out;
    border: 1.5px solid #ddd;
    background-color: #fff;
    color: #111;
    user-select:none;
  }
  .btn-primary:hover, .btn-secondary:hover, .btn-social:hover {
    background-color: #f5f5f5;
  }
  .btn-google svg {
    width: 20px; 
    height: 20px;
    margin-right: 0.75rem;
  }
  .btn-email svg {
    width: 20px;
    height: 20px;
    margin-right: 0.75rem;
  }
  .btn-apple svg, .btn-facebook svg {
    width: 20px;
    height: 20px;
    margin-right: 0.75rem;
  }
  .btn-social {
    flex-grow: 1;
    border-radius: 0.5rem;
    border: 1.5px solid #ddd;
    background-color: white;
    color: #111;
  }
  .btn-facebook {
    color: #1877f2;
    border-color: #1877f2;
  }
  .btn-facebook:hover {
    background-color: #e3f0fd;
  }
  /* Links */
  a {
    color: #007a33;
    text-decoration: underline;
  }
  a:hover {
    color: #004d1a;
  }
  /* Container and layout */
  .container {
    background-color: white;
    max-width: 900px;
    margin: 3.5rem auto 3.5rem auto;
    border-radius: 12px;
    box-shadow: 0 12px 40px rgb(0,0,0,0.2);
    display: flex;
    overflow: hidden;
  }
  .right-panel {
    padding: 2.5rem 3.5rem;
    flex: 1;
  }
  .header-top {
    max-width: 900px;
    margin: auto;
    padding: 1rem 3rem;
    background-color: #e1e1e1;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: 600;
    font-size: 0.9rem;
    user-select:none;
  }
  .header-top .logo {
    font-weight: 900;
    font-size: 1.5rem;
    color: #333;
    display: flex;
    align-items: center;
  }
  .header-top .logo span {
    color: #0dbf87;
    font-weight: 900;
    margin-left: 3px;
    font-size: 1.8rem;
  }
  .header-top .actions {
    display: flex;
    gap: 0.75rem;
  }
  .header-top .actions a {
    padding: 0.5rem 1rem;
    border-radius: 0.375rem;
    border: 1px solid transparent;
    cursor: pointer;
    transition: background-color 0.2s ease;
    font-weight: 600;
    font-size: 0.9rem;
    align-self: center;
    text-decoration: none;
    color: #333;
  }
  .header-top .actions a:first-child:hover {
    text-decoration: underline;
  }
  .header-top .actions .btn-join {
    border-color: #777;
  }
  .header-top .actions .btn-join:hover {
    background-color: #ddd;
  }
  /* Responsive */
  @media (max-width: 768px){
    .container {
      flex-direction: column;
      margin: 1.5rem 1rem 1.5rem 1rem;
      max-width: 100vw;
      border-radius: 0;
      box-shadow: none;
    }
    .left-panel {
      position: relative;
      border-radius: 0;
      height: 280px;
      padding: 1.5rem 1.5rem 7rem 2rem;
    }
    .left-panel h2 {
      font-size: 1.5rem;
      margin-top: 0;
    }
    .left-panel ul {
      font-size: 1rem;
      margin-top: 1rem;
    }
    .left-panel img {
      height: 120px;
      max-width: none;
      left: unset;
      bottom: 0;
      right: 0;
      transform: none;
      opacity: 0.85;
      user-select:none;
    }
    .right-panel {
      padding: 2rem 1.5rem 2rem 1.5rem;
    }
}
</style>
</head>
<body class="bg-gray-50 select-none">
<main class="container" role="main" aria-labelledby="create-account-heading">

  <!-- Left panel with the red background, text and image -->
  <section class="left-panel" aria-hidden="tue" aria-label="Benefits and image">
    <h2>Success starts here</h2>
    <ul>
      <li>Over 700 categories</li>
      <li>Quality work done faster</li>
      <li>Access to talent and businesses across the globe</li>
    </ul>
    <img src="join.ad.jpeg"
      alt=""
      loading="lazy"
      onerror="this.style.display='none'"
    />
  </section>

  <!-- Right panel with the create account form -->
  <section class="right-panel" aria-labelledby="create-account-heading">
    <h1 id="create-account-heading" class="font-bold text-2xl mb-2" tabindex="0">Create a new account</h1>
    <p class="mb-6" tabindex="0">Already have an account? <a href="#" tabindex="0">Sign in</a></p>

    <!-- Continue with Google -->
     <meta name="google-signin-client_id" content="58143326442-va8lu0ajf9nsilk5f5efvbunselg0jo2.apps.googleusercontent.com"></div>
     <script src="https://apis.google.com/js/platform.js" async defer></script>
    <div button class=" g-signin2 btn-primary btn-google w-full mb-4" aria-label="Continue with Google" data-onsuccess="onSignIn">
      <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 533.5 544.3" fill="none" >
        <path fill="#4285F4" d="M533.5 278.4c0-18.5-1.5-36.2-4.6-53.5H272.1v101.3h146.9c-6.4 34.3-26.3 63.3-56.4 82.9v68h91.5c53.5-49.2 83.4-121.9 83.4-198.7z"/>
        <path fill="#34A853" d="M272.1 544.3c76.6 0 140.9-25.3 187.9-68.7l-90.3-68c-25 17-56.9 26.9-97.6 26.9-75.1 0-138.6-50.7-161.5-118.4H18.4v74.2c46.5 91.9 142.4 154 253.7 154z"/>
        <path fill="#FBBC05" d="M110.6 324.5c-11-32.5-11-67.5 0-100l-74.2-74.2C11 197.3 0 235.7 0 272.1c0 36.6 11.4 71.8 36.4 100.8l74.2-74.2z"/>
        <path fill="#EA4335" d="M272.1 107.7c41.6 0 79 14.3 108.3 42.5l81.2-81.2C409.9 24.6 344.1 0 272.1 0 161.3 0 65.5 62.4 18.4 154.2l74.2 74.2c23.2-67.8 86.9-118.4 179.5-118.4z"/>
      </svg>
      Continue with Google
    </button>

    <!-- Continue with email -->
    <button class="btn-primary btn-email w-full" aria-label="Continue with email">
      <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon-email" style="margin-right: 0.75rem; width: 20px; height: 20px;">
        <path d="M3 8l7.89 5.26a2 2 0 0 0 2.22 0L21 8"></path>
        <rect x="2" y="5" width="20" height="14" rx="2" ry="2"></rect>
      </svg>
      Continue with email
    </button>

    <div class="divider" aria-hidden="true">OR</div>

    <div class="flex gap-4">
      <button class="btn-social btn-apple inline-flex items-center justify-center" aria-label="Continue with Apple" tabindex="0">
        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" style="width:20px;height:20px;margin-right:0.75rem">
          <path d="M16.365 1.43c-.969.049-2.083.658-2.76 1.413-.596.674-1.12 1.75-1.11 2.774 1.177.044 2.394-.736 3.145-1.505.629-.61 1.18-1.584 1.15-2.682z"/>
          <path d="M17.431 7.799c-1.05 0-1.846.63-2.816.63-1.19 0-1.979-.6-3.1-.6-1.48 0-3.005 1.3-3.005 4 0 2.42 1.82 5.98 4.145 5.98 1.14 0 1.54-.77 3-.77 1.47 0 2.282.77 3 .77 1.31 0 2.15-2.41 2.15-4.7 0-2.55-1.72-3.72-3.39-3.72z"/>
        </svg>
        Apple
      </button>
      <button class="btn-social btn-facebook inline-flex items-center justify-center" aria-label="Continue with Facebook" tabindex="0">
        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill="#1877F2" viewBox="0 0 24 24" style="width:20px;height:20px;margin-right:0.75rem">
          <path d="M22.675 0h-21.35C.6 0 0 .6 0 1.342v21.316C0 23.4.6 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.465.098 2.797.142v3.24l-1.92.001c-1.504 0-1.796.716-1.796 1.763v2.313h3.59l-.467 3.622h-3.123V24h6.116c.727 0 1.324-.6 1.324-1.342V1.342c0-.742-.6-1.342-1.324-1.342z"/>
        </svg>  
        Facebook
      </button>
    </div>

    <p class="mt-8 text-xs text-gray-600 leading-relaxed" tabindex="0">
      By joining, you agree to the Fiverr <a href="#" tabindex="0">Terms of Service</a> and to occasionally receive emails from us. Please read our <a href="#" tabindex="0">Privacy Policy</a> to learn how we use your personal data.
    </p>
  </section>
</main>

</body>
</html>

