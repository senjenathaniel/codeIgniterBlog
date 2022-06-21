CREATE TABLE blogs (
  id INT PRIMARY KEY AUTO_INCREMENT,
  blog_id VARCHAR(20) UNIQUE NOT NULL,
  blog_title VARCHAR(50) NOT NULL,
  blog_BODY TEXT NOT NULL,
  blog_image_url VARCHAR(250),
  blog_author VARCHAR(30),
  blog_posting_time TIMESTAMP
);