# Contao Article Teaser Image

[![Latest Stable Version](https://img.shields.io/packagist/v/whiterabbitstudiosch/contao-article-teaser-image.svg?style=flat-square)](https://packagist.org/packages/whiterabbitstudiosch/contao-article-teaser-image)
[![License](https://img.shields.io/packagist/l/whiterabbitstudiosch/contao-article-teaser-image.svg?style=flat-square)](LICENSE)
[![Packagist Downloads](https://img.shields.io/packagist/dt/whiterabbitstudiosch/contao-article-teaser-image.svg?style=flat-square)](https://packagist.org/packages/whiterabbitstudiosch/contao-article-teaser-image)

## 📌 About

This Contao bundle adds a **teaser image field** to articles (`tl_article`) in Contao CMS.  
You can use it to display **featured images** for articles in both the backend and frontend.

## 🚀 Installation

### **1. Install via Composer**
Run the following command in your Contao installation directory:

```bash
composer require whiterabbitstudiosch/contao-article-teaser-image
```

### **2. Clear the Cache**
After installation, clear the Contao cache:

```bash
vendor/bin/contao-console cache:clear
```

### **3. Run Database Migration**
Apply the database changes:

```bash
vendor/bin/contao-console contao:migrate
```

### **4. Update Contao Manager (Optional)**
If you use **Contao Manager**, update your package list:
- Open Contao Manager.
- Click **"Update Packages"** to fetch the latest version.

## 🛠 Usage

### **1. Assign a Teaser Image to an Article**
- Go to **Content > Articles** in the Contao backend.
- Edit an article and find the **"Teaser Image"** field.
- Upload or select an image from the file manager.

### **2. Display Teaser Image in a Template**
To display the teaser image in your frontend templates, use the following code:

```php
<?php if ($this->article_teaser_image): ?>
    <figure>
        <img src="<?= \Contao\FilesModel::findByUuid($this->article_teaser_image)->path ?>" alt="<?= $this->headline ?>">
    </figure>
<?php endif; ?>
```

Place this snippet in your **`mod_article.html5`** template or a custom module.

## 📝 License
This project is licensed under the **MIT License**. See the [LICENSE](LICENSE) file for details.

## 🤝 Contributing
Contributions are welcome!  
Feel free to submit issues, feature requests, or pull requests on [GitHub](https://github.com/whiterabbitstudiosCH/contao_article_teaser_image).

## 📬 Support
For any questions or feedback, please contact **White Rabbit Studios**:  
📧 **mail@whiterabbitstudios.ch**

---
Made with ❤️ by **White Rabbit Studios**
