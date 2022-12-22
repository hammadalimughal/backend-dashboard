<?php
include 'includes/header.php';
$page = 'home';
?>
<main>
    <div class="main-content">
        <div class="row g-4">
            <div class="col-12 panel">
                <div class="graph-card">
                    <div class="card-head">
                        <div class="text-content">
                            <h6>Total Shipments</h6>
                            <h4>Performance</h4>
                        </div>
                        <div class="btn-content btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn active">accounts</button>
                            <button type="button" class="btn">purchases</button>
                            <button type="button" class="btn">sessions</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas data-chart="performanceChart" id="performanceChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 co-md-6 col-12 panel">
                <div class="graph-card">
                    <div class="card-head">
                        <div class="icon" style="background: linear-gradient(to bottom left,#ff8d72,#ff6491,#ff8d72)">
                            <i class="fa-regular fa-comments"></i>
                        </div>
                        <div class="text-content text-end">
                            <h6>number</h6>
                            <h4>150GB</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <span class="muted-text"><i class="fa-regular fa-rotate-right"></i> Updated Now</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 co-md-6 col-12 panel">
                <div class="graph-card">
                    <div class="card-head">
                        <div class="icon" style="background: linear-gradient(to bottom left,#e14eca,#ba54f5,#e14eca)">
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="text-content text-end">
                            <h6>Followers</h6>
                            <h4>+45k</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <span class="muted-text"><i class="fa-regular fa-book"></i> Last Research</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 co-md-6 col-12 panel">
                <div class="graph-card">
                    <div class="card-head">
                        <div class="icon" style="background: linear-gradient(to bottom left,#00f2c3,#0098f0,#00f2c3)">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="text-content text-end">
                            <h6>Users</h6>
                            <h4>150,000</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <span class="muted-text"><i class="fa-regular fa-award"></i> Customers feedback</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 co-md-6 col-12 panel">
                <div class="graph-card">
                    <div class="card-head">
                        <div class="icon" style="background: linear-gradient(to bottom left,#fd5d93,#ec250d,#fd5d93)">
                            <i class="fa-regular fa-bug"></i>
                        </div>
                        <div class="text-content text-end">
                            <h6>Errors</h6>
                            <h4>12</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <span class="muted-text"><i class="fa-regular fa-clock"></i> In the last hours</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12 panel">
                <div class="graph-card card-table">
                    <div class="card-head">
                        <div class="text-content">
                            <h5>TASKS(5)</h5>
                            <h6>Today</h6>
                        </div>
                        <div class="card-drp">
                            <a class="setting-icon" data-bs-toggle="collapse" href="#set-cont-1" role="button"
                                aria-expanded="false" aria-controls="set-cont-1"><i class="fa-regular fa-gear"></i></a>
                            <div class="collapse not-cont" id="set-cont-1">
                                <ul>
                                    <li><a href="javascript:;">notification 01</a></li>
                                    <li><a href="javascript:;">notification 02</a></li>
                                    <li><a href="javascript:;">notification 03</a></li>
                                    <li><a href="javascript:;">notification 04</a></li>
                                    <li><a href="javascript:;">notification 05</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-scroll">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-checkbox">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </div>
                                        </td>
                                        <td class="flex-01">
                                            <h5>Update the Documentation</h5>
                                            <p>Dwuamish Head, Seattle, WA 8:47 AM</p=>
                                        </td>
                                        <td>
                                            <button data-tooltip="edit task" class="edit-btn"><i
                                                    class="fa-regular fa-pencil"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-checkbox">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </div>
                                        </td>
                                        <td class="flex-01">
                                            <h5>GDPR Compliance</h5>
                                            <p>The GDPR is a regulation that requires businesses to protect the personal
                                                data and
                                                privacy of Europe citizens for transactions that occur within EU member
                                                states.</p>
                                        </td>
                                        <td>
                                            <button data-tooltip="edit task" class="edit-btn"><i
                                                    class="fa-regular fa-pencil"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-checkbox">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </div>
                                        </td>
                                        <td class="flex-01">
                                            <h5>Solve the issues</h5>
                                            <p>Fifty percent of all respondents said they would be more likely to shop
                                                at a company
                                            </p>
                                        </td>
                                        <td>
                                            <button data-tooltip="edit task" class="edit-btn"><i
                                                    class="fa-regular fa-pencil"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-checkbox">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </div>
                                        </td>
                                        <td class="flex-01">
                                            <h5>Release v2.0.0</h5>
                                            <p>Ra Ave SW, Seattle, WA 98116, SUA 11:19 AM</p>
                                        </td>
                                        <td>
                                            <button data-tooltip="edit task" class="edit-btn"><i
                                                    class="fa-regular fa-pencil"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-checkbox">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </div>
                                        </td>
                                        <td class="flex-01">
                                            <h5>Export the processed files</h5>
                                            <p>The report also shows that consumers will not easily forgive a company
                                                once a breach
                                                exposing their personal data occurs. </p>
                                        </td>
                                        <td>
                                            <button data-tooltip="edit task" class="edit-btn"><i
                                                    class="fa-regular fa-pencil"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-checkbox">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </div>
                                        </td>
                                        <td class="flex-01">
                                            <h5>Arival at export process</h5>
                                            <p>Capitol Hill, Seattle, WA 12:34 AM</p>
                                        </td>
                                        <td>
                                            <button data-tooltip="edit task" class="edit-btn"><i
                                                    class="fa-regular fa-pencil"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12 panel">
                <div class="graph-card card-table">
                    <div class="card-head">
                        <div class="text-content">
                            <h5>Management Table</h5>
                        </div>
                        <div class="card-drp">
                            <a class="setting-icon" data-bs-toggle="collapse" href="#set-cont-2" role="button"
                                aria-expanded="false" aria-controls="set-cont-2"><i class="fa-regular fa-gear"></i></a>
                            <div class="collapse not-cont" id="set-cont-2">
                                <ul>
                                    <li><a href="javascript:;">notification 01</a></li>
                                    <li><a href="javascript:;">notification 02</a></li>
                                    <li><a href="javascript:;">notification 03</a></li>
                                    <li><a href="javascript:;">notification 04</a></li>
                                    <li><a href="javascript:;">notification 05</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-scroll">
                            <table class="table-management">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>job position</th>
                                        <th class="progress-cell">milestone</th>
                                        <th>salary</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="img-fluid" src="images/profile1.jpg" alt="">
                                        </td>
                                        <td>
                                            <h6>Tania Mike</h6>
                                        </td>
                                        <td>
                                            <h6>Develop</h6>
                                        </td>
                                        <td class="progress-cell">
                                            <span class="progress-value">25%</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6>$99,225</h6>
                                        </td>
                                        <td>
                                            <button class="refresh-btn" data-tooltip="Refresh">
                                                <i class="fa-regular fa-rotate-right"></i>
                                            </button>
                                            <button class="delete-btn" data-tooltip="Delete">
                                                <i class="fa-regular fa-xmark"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-fluid" src="images/profile2.jpg" alt="">
                                        </td>
                                        <td>
                                            <h6>John Doe</h6>
                                        </td>
                                        <td>
                                            <h6>CEO</h6>
                                        </td>
                                        <td class="progress-cell">
                                            <span class="progress-value">77%</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 77%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6>$89,241</h6>
                                        </td>
                                        <td>
                                            <button class="refresh-btn" data-tooltip="Refresh">
                                                <i class="fa-regular fa-rotate-right"></i>
                                            </button>
                                            <button class="delete-btn" data-tooltip="Delete">
                                                <i class="fa-regular fa-xmark"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-fluid" src="images/profile3.jpg" alt="">
                                        </td>
                                        <td>
                                            <h6>Alexa Mike</h6>
                                        </td>
                                        <td>
                                            <h6>Design</h6>
                                        </td>
                                        <td class="progress-cell">
                                            <span class="progress-value">41%</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 41%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6>$92,144</h6>
                                        </td>
                                        <td>
                                            <button class="refresh-btn" data-tooltip="Refresh">
                                                <i class="fa-regular fa-rotate-right"></i>
                                            </button>
                                            <button class="delete-btn" data-tooltip="Delete">
                                                <i class="fa-regular fa-xmark"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-fluid" src="images/profile4.jpg" alt="">
                                        </td>
                                        <td>
                                            <h6>Jana Monday</h6>
                                        </td>
                                        <td>
                                            <h6>Marketing</h6>
                                        </td>
                                        <td class="progress-cell">
                                            <span class="progress-value">50%</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6>$49,990</h6>
                                        </td>
                                        <td>
                                            <button class="refresh-btn" data-tooltip="Refresh">
                                                <i class="fa-regular fa-rotate-right"></i>
                                            </button>
                                            <button class="delete-btn" data-tooltip="Delete">
                                                <i class="fa-regular fa-xmark"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-fluid" src="images/profile5.jpg" alt="">
                                        </td>
                                        <td>
                                            <h6>Paul Dickens</h6>
                                        </td>
                                        <td>
                                            <h6>Develop</h6>
                                        </td>
                                        <td class="progress-cell">
                                            <span class="progress-value">100%</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6>$69,201</h6>
                                        </td>
                                        <td>
                                            <button class="refresh-btn" data-tooltip="Refresh">
                                                <i class="fa-regular fa-rotate-right"></i>
                                            </button>
                                            <button class="delete-btn" data-tooltip="Delete">
                                                <i class="fa-regular fa-xmark"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-fluid" src="images/profile6.jpg" alt="">
                                        </td>
                                        <td>
                                            <h6>Manuela Rico</h6>
                                        </td>
                                        <td>
                                            <h6>Manager</h6>
                                        </td>
                                        <td class="progress-cell">
                                            <span class="progress-value">15%</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 15%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6>$99,201</h6>
                                        </td>
                                        <td>
                                            <button class="refresh-btn" data-tooltip="Refresh">
                                                <i class="fa-regular fa-rotate-right"></i>
                                            </button>
                                            <button class="delete-btn" data-tooltip="Delete">
                                                <i class="fa-regular fa-xmark"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include 'includes/footer.php';
$page = 'home';
?>