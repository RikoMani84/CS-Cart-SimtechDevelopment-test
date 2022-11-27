# CS-Cart-Simtech Development test
### Training
1. First you need to download the CMS for CS-Cart online stores from the following site: [root](http://www.cs-cart.ru/download.html)
2. Install it at home, installation instructions can be found here: [root](https://www.cs-cart.ru/docs/latest/install/)
3. Video tutorials on installation, administration and development for CS-Cart can be viewed here: [root](https://vimeo.com/cscart/collections)
4. Documentation is here [root](https://www.cs-cart.ru/docs)
----------
### Module description
The module involves creating an interface in CS-Cart for managing personnel through the admin panel, as well as displaying a page with a list of personnel in the storefront. Step by step:

1. In the admin panel, add the Staff link in the Website section of the top menu.
2. Clicking on this link should open a new Staff page in the admin area.
3. On this page, the admin can add, edit Staff members.
4. Posts should be shown as a table with the following columns (similar to Website -> Pages menu)
      1. ID (unique identifier, set automatically);
      2. Name; (The name will be formed from the First name and Last name values)
      3. Status;
5. The design of all new pages should be done in the same style with all other pages of the admin part.
6. Adding a new Staff member occurs by clicking on the button in the form of a plus, by analogy with the Pages page. Clicking the button opens a page for entering information about the employee. The page format is similar to the edit page (only with empty fields), which is described below in paragraph 8.
7. Being on the page with the list of employees and clicking on the link contained in the Name column of a particular Staff member entry, a detailed page should open with a description of the properties of the Staff member entry.
8. On this page (an analogy of the page, only without extra tabs and fields, you can take it from the detailed page of the customer Customers-> Customers -> Specific customer) the admin will be able to edit the following fields.
      1. "First name" input text field
      2. "Last name" input text box
      3. "Function/title" (for example: director, head of accounting, etc.) text input field.
      4. "Email" input text box
      5. "Internal Description" aria text editable through a standard visual HTML editor
9. Removing a Staff member should be implemented at least on the employee's detail page, via capture in the form of a gear, by analogy with the customer's detail page.
10. On the storefront, you need to add a page with a list of staff in a tabular format with the display of first / last name, position, email (you can take the page with a list of orders on the storefront without the My account -> Orders search option as an example).
11. The design of this page should be done in the standard style of all other pages of the client side.
