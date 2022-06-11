# Assignment - 3

My application can be found at:

[Here](https://call-me-ishmael-portfolio.herokuapp.com)

<aside>
💡 The application contains one or more features that require access control that prevent IDOR.

</aside>

The features which implement IDOR can be found when visiting:

[Here](https://call-me-ishmael-portfolio.herokuapp.com/faq)

- if the user is not logged in, he will not be able to create a new FAQ
- Once the user loges in he can create a new FAQ and edit as well as delete it, but he cannot edit any of the FAQs that he himself did not create. I have used `FaqPolicy`  to implement this and inside the blade file I am displaying/hiding the edit button using this logic

```php
@can('update', $faq)
            <button style="padding:.5rem; background:transparent; border:none; color:#4ba0ea"><a
                    href="{{route('faq.edit', $faq)}}">Edit</a></button>
@endcan
```