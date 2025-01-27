<h3>New Contact Enquiry</h3>
<p><strong>Name:</strong> {{ $name }}</p>
<p><strong>Email:</strong> {{ $email }}</p>
<p><strong>Phone:</strong> {{ $phone }}</p>
<p><strong>Country:</strong> {{ $country }}</p>
@if ($company_size)
    <p><strong>Company Size:</strong> {{ $company_size }}</p>
@endif
@if ($company_name)
    <p><strong>Company Name:</strong> {{ $company_name }}</p>
@endif
@if ($company_website)
    <p><strong>Company Website:</strong> {{ $company_website }}</p>
@endif
@if ($project_title)
    <p><strong>Project Title:</strong> {{ $project_title }}</p>
@endif
@if ($requirement)
    <p><strong>Requirement:</strong> {{ $requirement }}</p>
@endif
