## Updating Your Digital Brands Email Signature


## Removing Underlines From Email Signatures

If you have underlines in your email signature, follow these steps:

**1.** Drag and drop the following link into your Bookmarks Bar\*\* →  [Remove Underlines](javascript:%28function%28%29%7Bvar%20links%20%3D%20document.getElementsByClassName%28%22gmail_signature%22%29%5B0%5D.getElementsByTagName%28%27a%27%29%3Bfor%20%28%20var%20i%20%3D%200%3B%20i%20<%20links.length%3B%20i%2B%2B%20%29%20%7Blink%20%3D%20links%5Bi%5D%3Bif%20%28%20true%20%29%20%7Blink.style.textDecoration%20%3D%20%27none%27%3Bvar%20inner%20%3D%20link.innerHTML%3Blink.innerHTML%20%3D%20%27%27%3Bvar%20event%20%3D%20new%20CustomEvent%28%22keyup%22%29%3Bvar%20element%20%3D%20link%3Bwhile%20%28%20element.parentNode%29%20%7Belement.dispatchEvent%28event%29%3Belement%20%3D%20element.parentNode%3B%7Dlink.innerHTML%20%3D%20inner%3Bvar%20element%20%3D%20link%3Bwhile%20%28%20element.parentNode%29%20%7Belement.dispatchEvent%28event%29%3Belement%20%3D%20element.parentNode%3B%7D%7D%7D%7D%29%28%29)

**2.** Go to your Gmail Settings. You should be on the General tab.

**3.** Click "Remove Underlines" on your Bookmarks Bar.

**4.** Scroll to the bottom and click "Save Changes".

**5.** Send a test email to make sure the underlines are removed.

**6.** Remove link from Bookmarks Bar by right-clicking and going to "Delete"

<br>
\*\* If you don't see your Bookmarks Bar:

**Windows Chrome**: press Ctrl+Shift+B

**Mac Chrome**: functionality to drag a link to Bookmarks Bar is broken and a known bug Chrome for Mac. Try Firefox or Safari for now.

**Mac Safari**: press Command+Shift+B

**Firefox**: right click the toolbar and click "Bookmarks Toolbar".

<br>
If you're curious, you can view javascript source for the bookmarklet [here](https://gist.github.com/db-roberto/1d75e1d58ce0f2ee9f98ab13a146160f).
