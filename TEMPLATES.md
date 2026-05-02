# Dr. Krishnan's Website - Content Templates

To ensure that any new photos, videos, or blog posts added in the future maintain the same style and size, please use these standardized HTML snippets.

## 1. Visual Gallery Card (`pages/gallery.html`)
These cards appear in the **Visuals** section.

### Standard Card (1 Column)
```html
<div class="gitem rev" data-cat="CATEGORY_NAME" data-src="../images/YOUR_IMAGE.jpg" data-label="TITLE" data-sub="SUBTITLE / DESCRIPTION">
    <img src="../images/YOUR_IMAGE.jpg" alt="ALT_TEXT">
    <div class="gov">
        <div>
            <div class="gov-label">TITLE</div>
            <div class="gov-sub">SUBTITLE / DESCRIPTION</div>
        </div>
    </div>
</div>
```

### Featured Card (Spans 2 Columns)
Add the `feat` class to the main `div`.
```html
<div class="gitem feat rev" data-cat="workshop" data-src="../images/YOUR_IMAGE.jpg" data-label="TITLE" data-sub="DESCRIPTION">
    ... (Internal content same as above)
</div>
```
*Note: Categories can be `workshop`, `keynote`, or `executive` for the filter to work.*

---

## 2. Video Card (`pages/videos.html`)
These cards appear in the **Showreel** section.

### YouTube Video
```html
<div class="vcard rev">
    <div class="vcard-thumb">
        <iframe src="https://www.youtube.com/embed/YOUTUBE_ID?rel=0" title="VIDEO_TITLE" allowfullscreen loading="lazy"></iframe>
    </div>
    <div class="vcard-body">
        <span class="vtag">CATEGORY TAG</span>
        <h4>VIDEO TITLE</h4>
        <p>Short description of the session goes here.</p>
    </div>
</div>
```

### Local Video (MP4)
```html
<div class="vcard rev">
    <div class="vcard-thumb">
        <video controls poster="../images/POSTER_IMAGE.jpg">
            <source src="../images/YOUR_VIDEO.mp4" type="video/mp4">
        </video>
    </div>
    <div class="vcard-body">
        <span class="vtag">CATEGORY TAG</span>
        <h4>VIDEO TITLE</h4>
        <p>Short description of the session goes here.</p>
    </div>
</div>
```

---

## 3. Blog Post Card (`pages/blog.html`)
These cards appear in the **Blog** section.

```html
<div class="blog-card rev" data-category="CATEGORY_NAME">
    <div class="blog-card-img">
        <img src="../images/BLOG_IMAGE.jpg" alt="ALT_TEXT">
        <span class="bc-tag">CATEGORY_NAME</span>
    </div>
    <div class="blog-card-body">
        <div class="bc-meta">
            <span><i class="fas fa-clock"></i>READ_TIME min</span>
            <span><i class="fas fa-calendar"></i>MONTH YEAR</span>
        </div>
        <h4 class="bc-title">BLOG_TITLE</h4>
        <p class="bc-excerpt">One-sentence summary of the post contents.</p>
        <a href="LINK_TO_ARTICLE" target="_blank" class="bc-read">Read More <i class="fas fa-arrow-right"></i></a>
    </div>
</div>
```
*Categories for sidebar filter: `leadership`, `mindset`, `strategy`, `growth`, `ai`.*

---

## Important Rules:
1. **Reveal Animation:** Ensure each card has the `rev` class to trigger the bottom-to-top reveal animation.
2. **Animation Delay:** You can add `d1`, `d2`, or `d3` (e.g., `rev d1`) to stagger the timing when multiple items are in a row.
3. **Image Paths:** Use `../images/filename.jpg` inside the `pages/` directory files, and `images/filename.jpg` in `index.html`.
