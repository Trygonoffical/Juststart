@extends('layouts.app')

@section('content')

<style>
.form-control{
  border-color: #ccc !important;
}
.topbanner .logo-img {
    max-height: 40px;
    width: auto;
}
.text-yellow{
  color: #eb8d15 !important;
}
.document-required .doc-list .doc-item{
  padding:10px;
}
.document-required .doc-list .doc-item>div{
  border:1px solid #4d525a;
  border-radius: 20px;
  padding: 20px;
}

.accordion-collapse .card-body {
  text-align:left !important;
}
</style>


<section class="wrapper mt-0 bg-soft-sky topbanner">
  <div class=" container pt-md-10 py-14">
    <div class="row">
        <div class="col-md-7 col-lg-7">
            <h1 class="text-blue mb-4 font-bolder">{{ $name }} </h1>

            <p>Focus on the creative parts of your business and let us do the hard work of bookkeeping. We will ensure you get rid of the anxiety of getting your taxes done on time. Hire JustStart’s online accounting solutions to bring you out of the weeds so you can think strategically about your finances. </p>

            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Up to-date accounting </span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Analysis of year round entries</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Innovative bookkeeping </span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Managed accounting  </span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Expert support </span></li>
            </ul>

            <h3>Get professional help in Online Bookkeeping and Accounting Services</h3>

            <p>Submit your details to talk to our business representatives. We will clear all your doubts</p>
        </div>
        <div class="col-md-5 col-lg-5">
            <div class="card bg-white">
                <div class="card-body p-6">
                  @include('forms.service-form-banner') 
              </div>
            <!--/.card-body -->
            </div>

            @include('component.rating')

        </div>
    </div>
  </div>
</section>


<!-- Overview -->
<section class="wrapper">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">OVERVIEW</h6>
            <h3 class="display-4 mb-4 font-bolder">Why are Bookkeeping Services and Accounting Services Important?</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>Accounting is foundational in business because accounting helps examine a business’s exact financial status. An overall financial analysis allows companies to develop progressive strategies, comply with the laws and regulations governing the state, and evolve with time. However, the role often requires expert help that goes beyond analyzing financial data. Accountants provide insight into many facets of business valuations, profit acquisition, cybersecurity, and bookkeeping management. </p>
            
            <ul>
              <li>Analysis and summarization of financial health.</li>
              <li>Paying taxes on time.</li>
              <li>Accounting balance at the end of the year.</li>
              <li>Calculating the loss a business has suffered.</li>
            </ul>
           
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <figure class="rounded">
              <img src="{{asset('images/overview/accounting-bookkeeping-services.jpg')}}" alt="accounting bookkeeping services" >
            </figure>
          </div>
      </div>
  </div>
</section>

<!-- DIFFERENCE -->
<section class="wrapper ">
  <div class=" container p-10 ">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">DIFFERENCE</h6>
            <h3 class="display-4 mb-4 font-bolder">Difference between Accounting Service & Bookkeeping Services</h3>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6 col-lg-12 mx-auto">
            
            <table class="table table-bordered">
                <tbody><tr>
                    <td class="fs-20"><b>Accounting  </b></td>
                    <td class="fs-20"><b>Bookkeeping </b></td>
                </tr>
                <tr>
                    <td>
                      <p>It is the process of tracking income and expenses.</p>
                    </td>
                    <td>
                      <p>Bookkeeping is the process of recording transactions and preparing financial statements. </p>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p>It uses provided information to prepare financial reports and statements.</p>
                    </td>
                    <td>
                      <p>It works as the foundation for accounting.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p>It has a broader scope than bookkeeping. </p>
                    </td>
                    <td>
                      <p>It is a segment of the accounting system.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p>End result is financial statements to make informed decisions. </p>
                    </td>
                    <td>
                      <p>End result becomes the input for accounting.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p>It helps analyze, evaluate, and communicate business transactions in a year through a prepared ledger account.</p>
                    </td>
                    <td>
                      <p>The goal is to identify, measure, and record the transactions.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p>It requires highly skilled accountants to analyze financial data.</p>
                    </td>
                    <td>
                      <p>It does not require higher skills to maintain data. </p>
                    </td>
                </tr>
              </tbody></table>
           
          </div>
      </div>
  </div>
</section>

<!-- BENEFITS -->
<section class="wrapper bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">BENEFITS</h6>
            <h3 class="display-4 mb-4 font-bolder">Benefits of Bookkeeping Services</h3>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Eases Tax Payment</h4>
                <p>Every business must have up–to-date financial records while filing its company taxes. The more detailed and clear the income tax file, the fewer the problems. If not, you may have to scramble your way through the piles of old receipts and invoices that you have filed in the past. But an organized bookkeeping record alleviates stress during such a crucial time of the year.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Prepares you for Audits</h4>
                <p>Arranging financial documents for review in any business audit is essential. Having an efficient and accurate bookkeeping system makes it easier to find what you’re looking for during an audit. If you are unable to provide substantial documentation for an audit, you may be required to pay additional taxes and penalty fees.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Assess Cash Flow</h4>
                <p>Every business owner must keep track of the money that enters and exits their business account. Proper bookkeeping & accounting practices help visualize your cash flow and identify problem areas where you can save money.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-navy me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Catch Cyber frauds</h4>
                <p>Reconciling your financial ledgers once a month helps owners detect errors or fraud. Since every transaction is checked to see any discrepancies between your statements and what’s on the books, business owners get to have a clearer and more accurate status of their business’s position.</p>
              </div>
            </div>
          
          </div>
      </div>
  </div>
</section>

<!-- PROCESS -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-orange ">
    <div class="row ">
        
        <div class="col-md-5 col-lg-8" >
          <h2 class="display-5 font-bolder">Process for Accounting and Bookkeeping</h2>

          <ul class="icon-list bullet-bg bullet-orange ms-0 gy-2 mt-8 mb-8">
            <li>
                <span><i class="uil uil-check"></i></span>
                <span><b>Talk to Experts:</b> Once you send us your query, an expert will respond to your queries to understand your business’s accounting requirement.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span><b>Document Collection:</b> We ask you for the necessary and relevant documents only to obtain In-depth information. We will suggest all the appropriate paperwork you should have to get the process started.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span><b>Execution:</b> Don’t worry! We will handle all the boring stuff as promised.</span>
            </li>
          </ul>

          <h3>Bad debts? No Problem! Try JustStart’s Safe Accounting and Business Compliances</h3>
          <p>We offer scalable ways to support your growing business’s accounting needs through a combination of innovative bookkeeping and technology so you stay informed about your bad debts, overheads, and expenses. We will reconcile your financial records securely so you can make smart decisions.</p>
          
        </div>
        <div class="col-md-7 col-lg-4" >
          <figure class="rounded">
            <img src="{{asset('')}}images/service-icon/file.png" alt="service icon" />
          </figure>
        </div>
      
    </div>

  </div>
  <!-- /.container -->
</section>


<!-- WHY US -->
<section class="wrapper  ">
  <div class="container mb-10 ">
    <div class="card p-10 shadow-lg">
      <div class="row align-items-start ">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <h3 class="display-4 mt-6 mb-4 font-bolder">Why JustStart
              <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> 
            </h3>
              
            <ul class="icon-list bullet-bg bullet-blue ms-0 gy-2 mt-8 mb-8">
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span>JustStart consists of qualified CS, CA, lawyers, and business administrators.</span>
              </li>
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span>360° Corporate Legal Support</span>
              </li>
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span>We are a one-stop-shop solution for incorporations, <b>Online Accounting and Bookkeeping Services,</b> and other professional services.</span>
              </li>
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span>On-Time Service</span>
              </li>
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span>Super Support and Fast Service (Call, Email, Chat)</span>
              </li>
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span>Affordable than other professionals and service providers</span>
              </li>
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span>Point-to-Point update and dedicated relationship manager for guidance on upcoming compliance and other requirements</span>
              </li>
            </ul>
              
          </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ --> 
<section class="wrapper bg-soft-sky">
  <div class="container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">FAQ</h6>
            <h3 class="display-4 mb-4 font-bolder">LET'S CLEAR ALL THE DOUBTS!</h3>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
          <div class="accordion accordion-wrapper mt-10 faq-accordion" id="accordion">
              <div class="card accordion-item">
                <div class="card-header" id="faq-0">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>Why does someone need an Online accounting & bookkeeping service? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>Well, <b>accounting and bookkeeping</b> allow business owners to stay on top of their tax returns, keep their businesses organized, and prepare them for future investments. Finance analysis is a crucial component of this service that also helps a business through the following:</p>
                    <ul>
                      <li>Organizing records.</li>
                      <li>Planning an accurate budget.</li>
                      <li>Preparing tax return files such as GST Return.</li>
                      <li>Simplifying laws and compliances.</li>
                      <li>Providing simpler and manageable company status.</li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>Can a business in India run without accounting services?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>No! Accounting and bookkeeping are central to running a business in India. This process includes tracking every business transaction, cash inflow and outflow, and data. This data assists owners in knowing exact expenditures, spending, and new revenues a business makes.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Is bookkeeping a complex process?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>There are many stages in bookkeeping, such as equity, costs, revenue, assets, and liabilities, that make the process of recording financial data a bit difficult. Bookkeeping requires a strategy to manage a company’s finances using professional accountants and the latest software.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>Does Accounting Service & Bookkeeping Services help startups save time? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>Absolutely. Professional service providers monitor your startup’s progress carefully, allowing them to:</p>
                    <ul>
                      <li>Track time</li>
                      <li>Fetch records</li>
                      <li>Manage expenses.</li>
                      <li>Track your startup’s overall productivity.</li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>What things do I need to look out for while opting accounting services and bookkeeping services?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>Accounting and bookkeeping services are a must, whether you are a startup or an established business. Along with financial tracking, an expert in the field will also guide you to be responsible and ask you to look out for a few things, such as</p>
                    <ol>
                      <li>Begin keeping track of income statements.</li>
                      <li>Review balance sheets on a regular basis.</li>
                      <li>Take good care of your payroll.</li>
                      <li>Complete invoices on time.</li>
                      <li>Check the company’s expenses daily, etc.</li>
                    </ol>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>Can bookkeeping be done online?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>Yes. There is an abundance of virtual bookkeeping services being offered by professional service providers like JustStart. Companies like these perform tasks such as traditional bookkeeping, on-site or online bookkeeping.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-6">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="true" aria-controls="faq-collapse-6"><h2>Is bookkeeping essential for small business? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6">
                  <div class="card-body">
                    <p>Bookkeeping is essential for businesses of all sizes, whether small or large. A few tools that you can use to maintain a manageable record digitally are saving bank receipts and tracking revenues, assets, liabilities, and invoices to increase your company’s efficiency.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-7">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="true" aria-controls="faq-collapse-7"><h2>Is it necessary to record all financial transactions?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-7">
                  <div class="card-body">
                    <p>As per the Income Tax Act, it is mandatory to have an audit annually after you cross a certain threshold of turnover, which is possible if you have a record of all financial transactions for a completed year.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-8">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-8" aria-expanded="true" aria-controls="faq-collapse-8"><h2>Do I need to visit the accountant in person?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-8">
                  <div class="card-body">
                    <p>No! JustStart’s accounting and bookkeeping services are performed remotely using highly innovative software and technology. We do not ask our clients to have an in-person visit. However, clients are always welcome to visit us for any expert help. We are available via call, email, WhatsApp chat support, or website.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-9">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-9" aria-expanded="true" aria-controls="faq-collapse-9"><h2>What kind of services can I expect?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-9" class="accordion-collapse collapse" aria-labelledby="faq-9">
                  <div class="card-body">
                    <p>Based on the kind of service your business requires, we will provide standard services and generate a plan that will include analyzing balance sheets, profit and loss accounts, checking payables and receivables, and revenue.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->

            </div>
            <!--/.accordion -->
          </div>
      </div>
  </div>
</section>


@endsection