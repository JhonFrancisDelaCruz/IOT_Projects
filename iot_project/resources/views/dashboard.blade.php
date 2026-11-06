<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Filtration Dashboard</title>
    @vite(['resources/css/dashboard.css'])
</head>
<body>

    <header class="topbar">
        <h1>Water Filtration System</h1>
        <span class="status online">● System Online</span>
    </header>

    <main class="container">

        <section class="cards">
            <div class="card">
                <p class="label">pH Level</p>
                <p class="value">7.2</p>
                <span class="badge on">Normal</span>
            </div>
            <div class="card">
                <p class="label">TDS</p>
                <p class="value">85 ppm</p>
                <span class="badge on">Good</span>
            </div>
            <div class="card">
                <p class="label">Turbidity</p>
                <p class="value">1.8 NTU</p>
                <span class="badge on">Clear</span>
            </div>
            <div class="card">
                <p class="label">Flow Rate</p>
                <p class="value">12 L/min</p>
                <span class="badge on">Normal</span>
            </div>
            <div class="card">
                <p class="label">Water Temp</p>
                <p class="value">27.5 °C</p>
                <span class="badge on">Normal</span>
            </div>
            <div class="card">
                <p class="label">Tank Level</p>
                <p class="value">72 %</p>
                <div class="bar"><div class="fill" style="width: 72%"></div></div>
            </div>
        </section>

        <section class="panel">
            <h2>Filter Stages</h2>
            <table>
                <thead>
                    <tr>
                        <th>Stage</th>
                        <th>Type</th>
                        <th>Life Remaining</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Stage 1</td>
                        <td>Sediment Filter</td>
                        <td>
                            <div class="bar"><div class="fill" style="width: 80%"></div></div>
                        </td>
                        <td><span class="badge on">Good</span></td>
                    </tr>
                    <tr>
                        <td>Stage 2</td>
                        <td>Carbon Filter</td>
                        <td>
                            <div class="bar"><div class="fill warn" style="width: 35%"></div></div>
                        </td>
                        <td><span class="badge warn">Replace Soon</span></td>
                    </tr>
                    <tr>
                        <td>Stage 3</td>
                        <td>RO Membrane</td>
                        <td>
                            <div class="bar"><div class="fill" style="width: 60%"></div></div>
                        </td>
                        <td><span class="badge on">Good</span></td>
                    </tr>
                    <tr>
                        <td>Stage 4</td>
                        <td>UV Sterilizer</td>
                        <td>
                            <div class="bar"><div class="fill bad" style="width: 8%"></div></div>
                        </td>
                        <td><span class="badge off">Replace Now</span></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="panel">
            <h2>Controls</h2>
            <table>
                <thead>
                    <tr>
                        <th>Component</th>
                        <th>State</th>
                        <th>Last Change</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Main Pump</td>
                        <td><span class="badge on">Running</span></td>
                        <td>10 mins ago</td>
                    </tr>
                    <tr>
                        <td>Inlet Valve</td>
                        <td><span class="badge on">Open</span></td>
                        <td>10 mins ago</td>
                    </tr>
                    <tr>
                        <td>Flush Valve</td>
                        <td><span class="badge off">Closed</span></td>
                        <td>2 hours ago</td>
                    </tr>
                </tbody>
            </table>
        </section>

    </main>

</body>
</html>