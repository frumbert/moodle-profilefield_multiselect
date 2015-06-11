Moodle profile field multi-select
=================================

This Moodle profile field plugin lets you select one or more options from a multi-select field. You can use it for user profile fields, or if you have my [course metadata][meta] plugin you can also add custom multi-select fields to that.

This [fork][orig] specifically adds the ability to specify multiple default texts.

Installation Instructions:
--------------------------

1. Unzip the directory and copy inside your-moodle /user /profile /field (at the end the folder structure should look like your-moodle/user/profile/field/multiselect)
    * _or_ into your-moodle/local/course_meta/profile/field/multiselect, if using the [course meta][meta] plugin too
2. Log into Site as Admin user and go to site-administration -> Notification to perform installation.
3. After successful installation, you would find a new custom profile field type inside site administration -> user -> accounts -> user profile fields
4. ...
5. Profit!

License
-------

http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later

[orig]: https://github.com/nitinwaves/moodle-profilefield_multiselect
[meta]: https://github.com/frumbert/moodle-course_meta
