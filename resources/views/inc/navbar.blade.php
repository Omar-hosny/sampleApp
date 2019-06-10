<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
      <a class="navbar-brand" href="/">simpleApp</a>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class=" nav navbar-nav  mr-auto">
          <li class="nav-item">
            <a class=" {{Request:: is('/') ? 'active nav-link' : 'nav-link'}} " href="/">Home </a>
          </li>
          <li class="nav-item">
            <a class=" {{Request:: is('about') ? 'active nav-link' : 'nav-link'}} " href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class=" {{Request:: is('contact') ? 'active nav-link' : 'nav-link'}} " href="/contact">Contact</a>
          </li>
        </ul>
      </div>
  </div>
    
  </nav>
