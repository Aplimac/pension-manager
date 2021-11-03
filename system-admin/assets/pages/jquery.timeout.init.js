$.sessionTimeout({
    message: "Your session will be locked in 30 seconds.",
    keepAliveUrl: "index.html",
    logoutButton: "Logout",
    logoutUrl: "controllers/logout.php",
    redirUrl: "controllers/logout.php",
    warnAfter: 3e3,
    redirAfter: 3e4,
    countdownBar: !0
});