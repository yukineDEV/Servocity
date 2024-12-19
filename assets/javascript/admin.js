// main.js
document.addEventListener('DOMContentLoaded', function() {
  // Navigation handling
  const navLinks = document.querySelectorAll('.nav-links a');
  navLinks.forEach(link => {
      link.addEventListener('click', function(e) {
          // Remove active class from all links
          navLinks.forEach(l => l.parentElement.classList.remove('active'));
          // Add active class to clicked link
          this.parentElement.classList.add('active');
      });
  });

  // Notifications handling
  const notifications = document.querySelector('.notifications');
  if (notifications) {
      notifications.addEventListener('click', function() {
          // Toggle notifications panel
          const panel = document.createElement('div');
          panel.className = 'notifications-panel';
          panel.innerHTML = `
              <div class="notification-item">
                  <div class="notification-content">
                      <h4>New Activity</h4>
                      <p>Someone commented on your post</p>
                  </div>
                  <span class="notification-time">2m ago</span>
              </div>
          `;
          // Add panel to DOM or toggle visibility
      });
  }

  // Search functionality
  const searchInput = document.querySelector('.search-bar input');
  if (searchInput) {
      searchInput.addEventListener('input', function(e) {
          const searchTerm = e.target.value.toLowerCase();
          // Implement search functionality
      });
  }

  // Profile menu
  const profileMenu = document.querySelector('.profile');
  if (profileMenu) {
      profileMenu.addEventListener('click', function() {
          // Toggle profile dropdown
          const dropdown = document.createElement('div');
          dropdown.className = 'profile-dropdown';
          dropdown.innerHTML = `
              <ul>
                  <li><a href="profile.php">My Profile</a></li>
                  <li><a href="settings.php">Settings</a></li>
                  <li><a href="logout.php">Logout</a></li>
              </ul>
          `;
          // Add dropdown to DOM or toggle visibility
      });
  }

  // AJAX content loading
  function loadContent(url) {
      fetch(url)
          .then(response => response.text())
          .then(html => {
              document.querySelector('.content').innerHTML = html;
          })
          .catch(error => {
              console.error('Error loading content:', error);
          });
  }

  // Form submissions
  document.addEventListener('submit', function(e) {
      if (e.target.classList.contains('ajax-form')) {
          e.preventDefault();
          const formData = new FormData(e.target);
          
          fetch(e.target.action, {
              method: 'POST',
              body: formData
          })
          .then(response => response.json())
          .then(data => {
              // Handle response
              if (data.success) {
                  showNotification('Success', data.message, 'success');
              } else {
                  showNotification('Error', data.message, 'error');
              }
          })
          .catch(error => {
              console.error('Error submitting form:', error);
              showNotification('Error', 'An error occurred', 'error');
          });
      }
  });

  // Notification helper
  function showNotification(title, message, type) {
      const notification = document.createElement('div');
      notification.className = `notification ${type}`;
      notification.innerHTML = `
          <h4>${title}</h4>
          <p>${message}</p>
      `;
      document.body.appendChild(notification);
      setTimeout(() => {
          notification.remove();
      }, 3000);
  }
});